// Init App
var myApp = new Framework7({
    modalTitle: 'Startup Moola',
    // Enable Material theme
    material: true,
});

// Expose Internal DOM library
var $$ = Dom7;


// get specific dom node

var companyRelated = {
    "unit": $$('#company-unit'),
    "share": $$('#company-share'),
    "amount": $$('#company-amount'),
    "name": $$('#company-name'),
    "about": $$('#company-about'),
    "document": $$('#company-document')
}

var investorRelated = {
    "unitinput": $$('#investorunit-input')
}

var userinfo;
var currentCompanyId;

// Add main view
var mainView = myApp.addView('.view-main', {
    // Because we use fixed-through navbar we can enable dynamic navbar
    dynamicNavbar: false,
    domCache: true
});
// 1 Slide Per View, 50px Between
var mySwiper1 = myApp.swiper('.new-startups-slider', {
  pagination:'.new-startups-slider .swiper-pagination',
  spaceBetween: 50
});
$$(document).on('ajaxStart', function(e) {
    console.log('ajaxstart');
    
    if (e.detail.xhr.requestUrl.indexOf('autocomplete-languages.json') >= 0) {
        return;
    }
    myApp.showIndicator();
});
$$(document).on('ajaxComplete', function(e) {
    console.log('ajaxComplete');
    if (e.detail.xhr.requestUrl.indexOf('autocomplete-languages.json') >= 0) {
        return;
    }
    myApp.hideIndicator();
});
myApp.onPageInit('startup', function(page) {
	$$('.demo-alert').on('click', function () { 
	   myApp.alert('Our experts shall review your application and connect with you in 3-4 business days.', 'Thank You!');
	});
});


$$('#login-btn').on('click', function(){
    var data = myApp.formToJSON('#login-form');
    data.login = true;
    var url = "validation.php";
    
    data.username = 'Testname';
    data.password = '345';
    
    console.log(data)
    
    mainView.router.load({pageName: 'home'});
    $$.ajax({
        url: url,
        method: 'POST',
        data: data,
        dataType: 'json',
        error: loginError,
        success: loginCallBack,
        cache: false  
    })
})

var loginError = function(){
    console.log('tees');
}

var loginCallBack = function(e){
    console.log("loginCallback");
    console.log(e);
    
    if (e.status == 'success') {
        userinfo = e;
        console.log("validation");
        mainView.router.load({pageName: 'home'});
        $$('.user-name').text(e.name);
        $$('.balance-count').text(e.balance);
    }else {
        alert("wrong password or invalid username");
    }
}






$$('#place-bid').on('click', function(e){
    console.log(investorRelated.unitinput.val());
    var units = investorRelated.unitinput.val();
    console.log({companyid: currentCompanyId, investorid: parseInt(userinfo.id), units: parseInt(units)});
    
    $$.ajax({
        url: "investorBalanceData.php",
        method: 'POST',
        data: {companyid: currentCompanyId, investorid: parseInt(userinfo.id), units: parseInt(units)},
        dataType: 'json',
        success: bidSuccessCallback,
        error: bidErrorCallback
    })
     investorRelated.unitinput.val(null);
    
})

var bidErrorCallback = function(e){
    console.log("Error: ", e);
}

var bidSuccessCallback = function(e){
    console.log(e);
    if(e.status == 'success') {
        console.log(e.balance);
        $$('.balance-count').text(e.balance);
    }else {
        alert(e.message);
    }
}



// company display related
$$('#company-1').on('click', function(e){
    company(1);
})

$$('#company-2').on('click', function(e){
    company(2);
})

$$('#company-3').on('click', function(e){
    company(3);
})

var company = function(id){
    currentCompanyId = id;
    url = "companyData.php";
    $$.ajax({
        url: url,
        method: 'POST',
        data: {id: id},
        dataType: 'json',
        success: companySuccessCallback,
        error: companyErrorCallback
    })
}


var companySuccessCallback = function(e){
    console.log(e);
    companyRelated.amount.text(e.amount);
    companyRelated.share.text(e.buypershare);
    companyRelated.unit.text(e.units);
    companyRelated.name.text(e.name);
    companyRelated.about.attr('href', 'company-about-'+currentCompanyId + '.html');
}
var companyErrorCallback = function(e){
    console.log("Error: ", e);
}

