// Init App
var myApp = new Framework7({
    modalTitle: 'Startup Moola',
    // Enable Material theme
    material: true,
});

// Expose Internal DOM library
var $$ = Dom7;

// Add main view
var mainView = myApp.addView('.view-main', {
    // Because we use fixed-through navbar we can enable dynamic navbar
    dynamicNavbar: true,
    domCache: true
});
// 1 Slide Per View, 50px Between
var mySwiper1 = myApp.swiper('.new-startups-slider', {
  pagination:'.new-startups-slider .swiper-pagination',
  spaceBetween: 50
});
$$(document).on('ajaxStart', function(e) {
    console.log('ajaxstart');
    console.log(e);
    var data = e.detail;
    console.log(data);
    
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
    console.log(data)
    
    $$.ajax({
        url: url,
        method: 'POST',
        data: data,
        dataType: 'json',
        success: loginCallBack,
        cache: false  
    })
})

var loginCallBack = function(e){
    console.log("loginCallback");
    console.log(e);
    if (e.status == 'success') {
        console.log("validation");
        mainView.router.load({pageName: 'home'});
    }else {
        alert("wrong password or invalid username");
    }
}
