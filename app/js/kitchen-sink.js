// Init App
var myApp = new Framework7({
    modalTitle: 'Startup Moola',
    // Enable Material theme
    material: true,
});

// Expose Internal DOM library
var $$ = Dom7;


// get specific dom node
var profileRelated = {
    "name": $$('#profile-name'),
    "email": $$('#profile-email'),
    "address": $$('#profile-address') 
}

var companyRelated = {
    "unit": $$('#company-unit'),
    "share": $$('#company-share'),
    "amount": $$('#company-amount'),
    "buypershare": $$('#company-amount-shares'),
    "name": $$('#company-name'),
    "about": $$('#company-about'),
    "document": $$('#company-document'),
    "usershares": $$('#user-shares'),
    "useramountshares": $$('#user-amount-shares'),
    "usertotal": $$('#user-total')
    
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
    if (data.password == '' || data.username == '') {
        mainView.router.load({pageName: 'home'});
        return;
//        alert('please input your login information!');
//        return;
    }
    
   // data.username = 'Testname';
   // data.password = '345';
    
    console.log(data)
    
//    mainView.router.load({pageName: 'home'});
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
        profileRelated.name.val(e.name);
        profileRelated.email.val(e.contact);
        profileRelated.address.val(e.companyaddr);
    }else {
        
        alert("wrong password or invalid username");
    }
}


$$('#update-button').on('click', function(e){
    var profileName = profileRelated.name.val();
    var profileContact = profileRelated.email.val();
    var profileAddress = profileRelated.address.val();
    console.log({id: userinfo.id, profileName:profileName, profileEmail:profileContact, profileAddress:profileAddress});
    $$.ajax({
        url: "profileUpdate.php",
        method: 'POST',
        data: {id: userinfo.id, profileName:profileName, profileEmail:profileContact, profileAddress:profileAddress},
        dataType: 'json',
        success: profileSuccessCallback,
        error: profileErrorCallback
    })
                        
})

var profileSuccessCallback = function(e){
    console.log(e);
    if(e.status == 'success'){
        $$('.user-name').text(profileRelated.name.val());
    } else{
        alert(e.message);
    }
}

var profileErrorCallback = function(e){
    console.log("Error: ", e);
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
//    companyRelated.amount.text(e.amount);
    var buypershare = parseInt(e.amount)/parseInt(e.shares);
    console.log(e.amount, e.shares);
    companyRelated.buypershare.text(buypershare);
    companyRelated.share.text(e.shares);
    companyRelated.unit.text(e.units);
    companyRelated.name.text(e.name);
    companyRelated.about.attr('href', 'company-about-'+currentCompanyId + '.html');
    companyRelated.useramountshares.text(companyRelated.buypershare.text());
}
var companyErrorCallback = function(e){
    console.log("Error: ", e);
}






// plus and minus button in company page
$$('#plus-btn').on('click', function(){
    var maximum = parseInt(companyRelated.unit.text());
    if(investorRelated.unitinput.val() == ''){
        investorRelated.unitinput.val(1).trigger('change');
    }else {
        var valBefore = parseInt(investorRelated.unitinput.val());
        if (valBefore >= maximum) {
            return;
        }else {
            investorRelated.unitinput.val(valBefore + 1).trigger('change');
        }
    }
})

$$('#minus-btn').on('click', function(){
    if(investorRelated.unitinput.val() == ''){
        return;
    }else{
        var valBefore = parseInt(investorRelated.unitinput.val());
        if (valBefore <=1){
            investorRelated.unitinput.val('').trigger('change');
            return;
        } else{
            investorRelated.unitinput.val(valBefore -1).trigger('change');
        }
    }

})

$$('#investorunit-input').on('change', function(){
    console.log('number of units change');
    
    if (investorRelated.unitinput.val() == ''){
        companyRelated.usershares.text(0);
        companyRelated.usertotal.text(0);
    }else {
        var share = parseInt(companyRelated.share.text());
        var amount = parseInt(investorRelated.unitinput.val());
        companyRelated.usershares.text(share * amount);
        
        companyRelated.usertotal.text(share * amount * parseInt(companyRelated.buypershare.text()));
    }
})