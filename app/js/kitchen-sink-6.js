// Init App
var myApp = new Framework7({
    modalTitle: 'Startup Moola',
    // Enable Material theme
    material: true,
});

// Expose Internal DOM library
var $$ = Dom7;

$$("input").on("blur", function(e){
    return;
})

// get specific dom node
var profileRelated = {
    "email": $$('#profile-email'),
    "tel": $$('#profile-tel'),
    "firstname": $$("profile-firstname"),
    "lastname": $$("profile-lastname")
}

var companyRelated = {
    "unit": $$('#company-unit'),
    "share": $$('#company-share'),
    "amount": $$('#company-amount'),
    "buypershare": $$('#company-amount-shares'),
    "name": $$('#company-name'),
    "about": $$('#company-about'),
    "document": $$('#company-document'),
    "usershares": $$('.user-shares'),
    "useramountshares": $$('.user-amount-shares'),
    "usertotal": $$('.user-total')
    
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
 //    data.username = 'Testname';
 //    data.password = '345';
    if (data.password == '' || data.username == '') {
//        mainView.router.load({pageName: 'home'});
//        return;
        alert('please input your login information!');
        return;
    }
    

    
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
        console.log(e)
        console.log(profileRelated)
        mainView.router.load({pageName: 'home'});
        $$('.user-name').text(e.companyname);
        $$('.balance-count').text(money(e.balance));
        profileRelated.email.val(e.contact);
        $$("#profile-firstname").val(e.ContactFirstname);
        $$("#profile-lastname").val(e.ContactLastname);
        $$("#profile-tel").val(e.tel);
        
        console.log("debug")
    }else {
        
        alert("wrong password or invalid username");
    }
}

$$('#homewebsite').on('click', function(e){
    window.location.href = "http://40x.me/"
})
$$('.logowebsite').on('click', function(e){
    console.log("clicked")
    window.location.href = "http://40x.me/"
})




$$('#update-button').on('click', function(e){
    newprofile = {
        "firstName": $$("#profile-firstname").val(),
        "lastName": $$("#profile-lastname").val(),
        "email": $$("#profile-email").val(),
        "tel": $$("#profile-tel").val(),
        "id": userinfo.id
    }
    console.log(newprofile)
    
    $$.ajax({
        url: "profileUpdate.php",
        method: 'POST',
        data: newprofile,
        dataType: 'json',
        success: profileSuccessCallback,
        error: profileErrorCallback,
        cache: false
    })
                        
})

var profileSuccessCallback = function(e){
    console.log(e);
    if(e.status == 'success'){
//        $$('.user-name').text(profileRelated.name.val());
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
//    console.log({companyid: currentCompanyId, investorid: parseInt(userinfo.id), units: parseInt(units)});
    
    $$.ajax({
        url: "investorBalanceData.php",
        method: 'POST',
        data: {companyid: currentCompanyId, investorid: parseInt(userinfo.id), units: parseInt(units)},
        dataType: 'json',
        success: bidSuccessCallback,
        error: bidErrorCallback,
        cache: false
    })
//     investorRelated.unitinput.val(null);
    
})

var bidErrorCallback = function(e){
    console.log("Error: ", e);
}

var bidSuccessCallback = function(e){
    console.log(e);
    if(e.status == 'success') {
        console.log(e.balance);
        $$('.balance-count').text(money(e.balance));
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
        error: companyErrorCallback,
        cache: false
    })
}



var companySuccessCallback = function(e){
    console.log(e);
//    companyRelated.amount.text(e.amount);
    var buypershare = parseInt(e.amount)/parseInt(e.shares);
    console.log(e.amount, e.shares);
    companyRelated.buypershare.text(money(buypershare));
    companyRelated.share.text(money(e.shares));
    companyRelated.unit.text(money(e.units));
    companyRelated.name.text(e.name);
//    companyRelated.about.attr('href', 'company-about-'+currentCompanyId + '.html');
    companyRelated.useramountshares.text(companyRelated.buypershare.text());
    generateFileList(e.file);
    generateBMList(e.bm);
    $$("#investorunit-input").val(1).trigger('change')
    
    $$("#iframe-area-aboutfile").html('<iframe style="width: 100%; height: 100%" src="http://docs.google.com/gview?url='+e.aboutfile+'&embedded=true" frameborder="0"></iframe>')
    
}
var companyErrorCallback = function(e){
    console.log("Error: ", e);
}

function generateFileList(fileList){
    var listContent = "";
    for(var i = 0; i < fileList.length; i++){
        temp = '<li><a class="viewdocument link open-popup" data-popup=".more-menu" data-href="'+fileList[i].path+'" href="#"><span class="icon-download custom-icon"></span>'+fileList[i].filename+'</a></li>';
        listContent += temp;
    }
    $$('ul.bullet-list-custom').html(listContent);
    
    // view document click listen
    $$(".viewdocument").on('click', function(e){
        console.log("view document");
        href = $$(this).data('href');
        src = "http://docs.google.com/gview?url="+href+"&embedded=true";
        iframeArea = $$("#iframe-area")
        iframeArea.html('<iframe style="width: 100%; height: 100%" src="'+src+'" frameborder="0"></iframe>')

    })
}

function generateBMList(e){
    var listContent = "";
    for(var i = 0; i < e.length; i++){
        temp = '<div style="text-align:center">'+e[i].name+'</div><div><a class="centerimg" style="width:80%; margin-bottom:35px" href="'+e[i].path+'" data-lightbox="image-'+i+'" data-title="'+e[i].name+'"><img src="'+e[i].path+'" alt="" width="100%"></a></div>'
        listContent += temp;
    }
    $$('.bullet-list-image').html(listContent);
}



// plus and minus button in company page
$$('#plus-btn').on('click', function(){
    console.log("plus click")
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
        investorRelated.unitinput.val(1).trigger('change');;
    }else{
        var valBefore = parseInt(investorRelated.unitinput.val());
        if (valBefore <=1){
            investorRelated.unitinput.val(1).trigger('change');
            return;
        } else{
            investorRelated.unitinput.val(valBefore -1).trigger('change');
        }
    }

})

$$('#investorunit-input').on('change', function(){
    console.log('number of units change');
    
    if (investorRelated.unitinput.val() == ''){
        companyRelated.usershares.each(function(idx, item){
            $$(item).text(0);
        });
        companyRelated.usertotal.each(function(idx, item){
            $$(item).text(0);
        });
    }else {
        console.log($$('#company-share'))
        var share = parseInt($$('#company-share').text().replace(/,/g,''));
        var amount = parseInt(investorRelated.unitinput.val());
        
        companyRelated.usershares.each(function(idx, item){
//            console.log(idx);
//            console.log(item);
            $$(item).text(money(share * amount));
        }); 
        
        companyRelated.usertotal.each(function(idx, item){
            $$(item).text(money(share * amount * parseInt(companyRelated.buypershare.text())));
        });
        
    }
})

var money = function(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

// ask a question send button
$$('#send-email-btn').on('click', function(e){
    
    content = "mailto:jingjingjjw@gmail.com?body=" + escape($$("#question-area").val() + "\n\n\n\n"+$$(".user-name").text() + "\nEdited At " + (new Date()))
    window.open(content);
})