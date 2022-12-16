var app = angular.module('App', ['ngAnimate', 'ngMaterial', 'ngRoute', 'ngStorage', 'ngMap', 'angular-md5']);
app.constant('globals', {
    mainPage: 'https://sportido.com'
});
app.config(function($interpolateProvider){
    $interpolateProvider.startSymbol('{[{').endSymbol('}]}');
});
app.controller('SportidoApp', ["$scope", "CommonService", "$location", "$rootScope", "$localStorage", "$window", '$interval', function($scope, CommonService, $location, $rootScope, $localStorage, $window, $interval) {
    $rootScope.whatsappShare = function() {
        $rootScope.currentpage = $location.absUrl();
        $scope.sharewhatsappurl = "whatsapp://send?text=" + currentpage
    }
        // c = "Gurugram, Haryana, India";
    $scope.clevent = function(id) {
        if (id == 1) {
            clevertap.event.push("Clicked_webheader_call")
        } else {
            clevertap.event.push("Clicked_webheader_share")
        }
    }

    $scope.getLocation = function() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else {
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

 $scope.lat = "28.459218";
        $scope.lng = "77.061153";
$scope.searchlocation = function(argument) {
        if ($scope.searchLocation != undefined && $scope.searchLocation != null) {
            var data = CommonService.calllocation($scope.searchLocation);
            data.then(function(dt) {
                console.log(dt);
                $scope.localtityList = [];
                for (var i = 0; i < dt.data.predictions.length; i++) {
                    $scope.localtityList.push({
                        id: i,
                        name: dt.data.predictions[i].description
                    })
                }
            })
        }
    }
 $scope.checkit = function() {
        console.log("hiooooooooo" + $scope.chosenPlace);
        $scope.selectedvalue($scope.chosenPlace);
        $scope.city.long_name = $scope.chosenPlace.split(",")[0];
        // $scope.Title = "Book " + $rootScope.sub_type + " online in " + $scope.chosenPlace
    }

   $scope.sendApi = function(){
         $scope.showsmssuccess = false;
        if($scope.usermobile != undefined)
        {
            $scope.numerror = false;
            var data = CommonService.callsmslink($scope.usermobile);
         data.then(function(dt) {
                console.log(dt);
                $scope.showsmssuccess = true;
                $scope.usermobile = undefined;
               
            })
        }
        else{
            $scope.numerror = true;
        }
    }

    $scope.selectedvalue = function(xyz) {
        console.log('jhjghg',xyz);
        if (xyz != undefined) {
            var data = CommonService.calllonglat(xyz);
            data.then(function(dt) {
                console.log('test',dt);
                if (dt.data.results != undefined && dt.data.results != []) {
                    if (dt.data.results[0].geometry != undefined && dt.data.results[0].geometry != '') {
                        $scope.lat = dt.data.results[0].geometry.location.lat;
                        $scope.lng = dt.data.results[0].geometry.location.lng;
                        $scope.pagenum = 1;
                        $scope.apicall();
                    }
                }
            })
        }
    };
    $scope.keyvalue = function(xyz) {
        console.log("Himanshu");
        console.log($scope.selectedId121)
    };

function showPosition(position) {

  console.log(position.coords.latitude);
  console.log(position.coords.longitude);

  $scope.latitude = position.coords.latitude;
    $scope.longitude = position.coords.longitude;
    $scope.lat = position.coords.latitude;
    $scope.lng = position.coords.longitude;

    GetAddress($scope.latitude, $scope.longitude)
}



 function GetAddress(lat, lng) {

            var latlng = new google.maps.LatLng(lat, lng);
            var geocoder = geocoder = new google.maps.Geocoder();
            geocoder.geocode({ 'latLng': latlng }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    // if (results[1]) {
                    //     alert("Location: " + results[1].formatted_address);
                    // }

                     for (var i=0; i<results[0].address_components.length; i++) {
            for (var b=0;b<results[0].address_components[i].types.length;b++) {

            //there are different types that might hold a city admin_area_lvl_1 usually does in come cases looking for sublocality type will be more appropriate
                if (results[0].address_components[i].types[b] == "locality") {
                    //this is the object you are looking for
                    $scope.city= results[0].address_components[i];
                    $scope.chosenPlace = results[0].address_components[i].long_name;
                    break;
                }
                if (results[0].address_components[i].types[b] == "administrative_area_level_1") {
                    //this is the object you are looking for

                    $scope.chosenPlace = $scope.chosenPlace + ", " + results[0].address_components[i].long_name;
                    break;
                }
                if (results[0].address_components[i].types[b] == "country") {
                    //this is the object you are looking for

                    $scope.chosenPlace = $scope.chosenPlace + ", " + results[0].address_components[i].long_name;
                    break;
                }
            }
        }
                }
            });
        }

    $scope.favFn = function (name) {
        $scope.selectedSportsMdl = name;
        $scope.redirect();
    }
    $scope.gotobottom = function () {
        var a = 2000;
        $window.scrollTo(0, a);
    }
    $scope.init = function () {
        $window.scrollTo(0, 0);
        $scope.city ={};
        $scope.city.long_name = "gurgaon";
        $scope.sportList();
        $scope.getLocation()

        $scope.showit = !0;
        $scope.shareUrl = $location.absUrl();
        $scope.sportslist = ["aaaa", "rdf", "Dfrf", "Eerf", "frfrf"];
        $scope.showsportspop = !1;
        $scope.test = "Hi Sportido";
        new Fingerprint2().get(function(result, components) {
            console.log(result);
            console.log(components);
            clevertap.profile.push({
                "Site": {
                    "PlayerID": 42,
                    "UID": result
                }
            });
            $rootScope.UID = result;
            clevertap.event.push("Product Viewed")
        });
        var currentpage = $location.absUrl();
        $window.scrollTo(0, 0);
        $rootScope.breadid = 1;
        $scope.userconntected = !0;
        $scope.test = "Hi Sportido";
        $scope.hh = 40;
        $scope.mm = 0;
        $scope.sec = 0;
        $scope.thh = 40;
        $scope.tmm = 0;
        $scope.tsec = 0;
        $rootScope.player_id = 42;
        $rootScope.walletAmount = 0;
        $localStorage.walletAmount = 0;
        $localStorage.player_id = 42;
        $interval(function() {
            if ($scope.tmm == 0) {
                $scope.thh = $scope.thh - 1
            }
            if ($scope.tsec == 0) {
                if ($scope.tmm == 0) {
                    $scope.tmm = 59
                } else {
                    $scope.tmm = $scope.tmm - 1
                }
            }
            if ($scope.tsec == 0) {
                $scope.tsec = 59
            } else {
                $scope.tsec = $scope.tsec - 1
            }
            $scope.hh = $scope.thh;
            $scope.mm = $scope.tmm;
            $scope.sec = $scope.tsec
        }, 1000)
    }
    $scope.showsportspopfn = function() {
        $scope.showsportspop = !1
    }



    $scope.items =
    [      {string: 'Checking the network cables, modem, and router'}

            ];
        $scope.searching=function(){
             if($scope.searchString.length>0){
                $scope.vis={'visibility': 'visible'};}
            else{$scope.vis={'visibility': 'hidden'};
        }
    }
        $scope.changecursor=function($event){
                if ($event.keyCode == 40)
                {document.getElementById("select").focus();
                    if(document.getElementById("select").selectedIndex>0){
                    }else{    document.getElementById("select").selectedIndex=0;}
                }if ($event.keyCode ==38){
                          if(document.getElementById("select").selectedIndex==0)
{document.getElementById("input").focus();}}
}
        $scope.copy=function($event)
        {           if($event.keycode==38){}
                else if ($event.keycode==40){}
                else{$scope.searchString=$scope.txt;
document.getElementById("input").focus();}    $scope.vis={'visibility': 'hidden'};
        }

    $scope.redirect = function () {
        if($scope.chosenPlace == null || $scope.chosenPlace == undefined)
        {
                $scope.locationerror = true;
        }
        else{
            $scope.locationerror = false;
        }
        if ($scope.selectedSportsMdl != undefined && $scope.chosenPlace!=undefined && $scope.chosenPlace!=null){
            //$window.location.href = "/listing/"+ $scope.city.long_name+"/" + $scope.selectedSportsMdl;
            var selectedSports=$scope.selectedSportsMdl.split(" ");
            selectedSports=selectedSports[0]+'_'+selectedSports[1];
            $window.location.href = "listing/" + $scope.city.long_name + "/" + selectedSports;
			}
    }
    $scope.submitcontactinfo = function () {
        if ($scope.name != undefined && $scope.name != null && $scope.name != '' && $scope.email != undefined && $scope.email != '' && $scope.email != null && $scope.mobile != undefined && $scope.mobile != '' && $scope.mobile != null) {
            $scope.contacterror = false;
            
            // $scope.bookrequest = {  "name": $scope.name, "email": $scope.email, "mobile": $scope.mobile, "message": $scope.message, "sent_to" : "main" };
            $scope.bookrequest = "name=" + $scope.name + "&email=" + $scope.email + "&mobile=" + $scope.mobile + "&message=" + $scope.message + "&sent_to=" + "main";
        
            var data = CommonService.contact($scope);
            data.then(function (dt) {
                $scope.name = undefined;
                $scope.email = undefined;
                $scope.mobile = undefined;
                $scope.message = undefined;
                $scope.contactmsg = true;
            })
        }
        else{
            $scope.contacterror = true;
            $scope.contactmsg = false;
        }
    }
    

    $scope.selectedSports = function(item) {
        $scope.selectedSportsMdl = item;
        $scope.activityinput = item.subtype;
        $rootScope.sport_id = item.sport_id;
        $localStorage.sport_id = $rootScope.sport_id;
        $rootScope.sub_type = item.subtype;
        $localStorage.sub_type = $rootScope.sub_type;
        $rootScope.searchsport = $scope.searchsport;
        $localStorage.searchsport = $scope.searchsport;		
        item = item.replace(/\s/g, "_");
        $scope.city.long_name = $scope.city.long_name.replace(/\s/g, "_");
		//if($scope.chosenPlace!=undefined && $scope.chosenPlace!=null){
        //$scope.redirect();
    	//	}
        
        // $window.location.href = "sportslisting.html?sport=" + $rootScope.sub_type.replace(/\s/g, '') + "&sub_type=" + btoa($rootScope.sub_type)
    }
    $scope.user = {};
    $scope.logged = !1;
    $scope.byebye = !1;
    $scope.salutation = !1;
    var userIsConnected = !1;
    $scope.sportList = function() {
        if ($scope.sportslistFlag != !0) {
            var data = CommonService.getSportsapi($scope);
            data.then(function(dt) {
                console.log(dt);
                $scope.sportslisting = dt.data;
                $scope.sportslistFlag = !0
                $rootScope.datalist = "aa";

            })
        }
    }






/*An array containing all the country names in the world:*/
$scope.countries = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua & Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia & Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre & Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts & Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad & Tobago","Tunisia","Turkey","Turkmenistan","Turks & Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/


    $rootScope.GetDates = function(startDate, daysToAdd) {
        var aryDates = [];
        for (var i = 0; i <= daysToAdd; i++) {
            var currentDate = new Date();
            currentDate.setDate(startDate.getDate() + i);
            aryDates.push($rootScope.DayAsString(currentDate.getDay()) + ", " + currentDate.getDate() + ", " + currentDate.getFullYear() + "-" + (currentDate.getMonth() + 1) + "-" + currentDate.getDate())
        }
        return aryDates
    }
    $rootScope.MonthAsString = function(monthIndex) {
        var d = new Date();
        var month = new Array();
        month[0] = "January";
        month[1] = "February";
        month[2] = "March";
        month[3] = "April";
        month[4] = "May";
        month[5] = "June";
        month[6] = "July";
        month[7] = "August";
        month[8] = "September";
        month[9] = "October";
        month[10] = "November";
        month[11] = "December";
        return month[monthIndex]
    }
    $rootScope.DayAsString = function(dayIndex) {
        var weekdays = new Array(7);
        weekdays[0] = "Sunday";
        weekdays[1] = "Monday";
        weekdays[2] = "Tuesday";
        weekdays[3] = "Wednesday";
        weekdays[4] = "Thursday";
        weekdays[5] = "Friday";
        weekdays[6] = "Saturday";
        return weekdays[dayIndex]
    }
    $scope.viewMore = function(item, subtype, id, id1, type) {
        alert('sasa');
        $rootScope.provider_id = item;
        $localStorage.provider_id = $rootScope.provider_id;
        $rootScope.sub_type = subtype;
        $localStorage.sub_type = subtype;
        $rootScope.sport_id = id;
        $localStorage.sport_id = $rootScope.sport_id;
        $rootScope.breadid = 2;
        clevertap.event.push("Clicked_service_top3", {
            "Service_name": subtype,
        });
        // $window.location.href = "sportsprofile.html?vendor=" + type.replace(/\s/g, '') + "&provider_id=" + $rootScope.provider_id + "&sub_type=" + btoa($rootScope.sub_type) + "&service_id=" + btoa(id1) + "&provider=" + btoa(type) + "&service=" + btoa(subtype)
        $scope.city.long_name = $scope.city.long_name.replace(/\s/g, "_");
        type = type.replace(/\s/g, "_");
        $rootScope.sub_type = $rootScope.sub_type.replace(/\s/g, "_");


        $window.location.href = "/landing#/"+ $scope.city.long_name+ "/"+ $rootScope.sub_type +"/"+type+"/" + id1 + "_" + $rootScope.provider_id;
    }
}]);
app.directive('focusMe', ['$timeout', '$parse', function($timeout, $parse) {
    return {
        link: function(scope, element, attrs) {
            var model = $parse(attrs.focusMe);
            scope.$watch(model, function(value) {
                console.log('value=', value);
                if (value === !0) {
                    $timeout(function() {
                        element[0].focus()
                    })
                }
            });
            element.bind('blur', function() {
                console.log('blur');
                scope.$apply(model.assign(scope, !1))
            })
        }
    }
}]);
app.directive('whatsApp', function() {
    return {
        link: function(scope, elem, $attr) {
            elem.on('click', function() {
                var text = $attr.text;
                var url = $attr.whatsApp;
                var message = encodeURIComponent(text) + "  " + encodeURIComponent(url);
                var whatsapp_url = "whatsapp://send?text=" + message;
                window.location.href = whatsapp_url
            })
        }
    }
})

app.filter('filtersearch',function()
{   return function(arr, searchString){
     if(!searchString){
          return arr;   }
        var result = [];
             angular.forEach(arr, function(item){
            if(item.string.indexOf(searchString) !== -1){
                 result.push(item);
                }
               });
        return result;
    };
});

app.directive('googleplace', function() {
    return {
        require: 'ngModel',
        link: function(scope, element, attrs, model) {
            var options = {
                types: [],
                componentRestrictions: {}
            };
            scope.gPlace = new google.maps.places.Autocomplete(element[0], options);
            google.maps.event.addListener(scope.gPlace, 'place_changed', function() {
                scope.$apply(function() {
                    model.$setViewValue(element.val());
                    scope.checkit()
                })
            })
        }
    }
});
app.directive('numbersOnly', function() {
    return {
        require: 'ngModel',
        link: function(scope, element, attr, ngModelCtrl) {
            function fromUser(text) {
                if (text) {
                    text = text.toString();
                    var transformedInput = text.replace(/[^0-9]/g, '');
                    if (transformedInput !== text) {
                        ngModelCtrl.$setViewValue(transformedInput);
                        ngModelCtrl.$render()
                    }
                    return transformedInput
                }
                return undefined
            }
            ngModelCtrl.$parsers.push(fromUser)
        }
    }
})
