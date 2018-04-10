/**
 * getting latitude ,longitude and timezone
 * http://www.vedicrishiastro.com/astro-api/
 * Author: Chandan Tiwari
 * Date: 21/02/15
 * Time: 5:42 PM
 */
var getGeoDetails=function(a){var b=[],d="http://dev.akashvaani.com/api/",e=function(a,c){$.getJSON(d+"php/getGeoDetails.php",{name_startsWith:a,maxRows:6},function(a){b=[];var d=a.geonames;$.each(d,function(a,c){var d=c.place_name+" "+c.country_code;b.push({value:d,latitude:c.latitude,longitude:c.longitude,countryCode:c.country_code,timeZoneId:c.timezone_id})}),c(b)})};$(a).typeahead({minLength:3},{source:function(a,b){e(a,b)}}),$(a).on("typeahead:selected",function(a,b){var c=b.timeZoneId,e=$('input[name="dst"]:checked').length>0;$("#latitude").val(b.latitude),$("#longitude").val(b.longitude),$.getJSON(d+"php/getGeoDetails.php",{time_zone_id:c,isDst:e},function(a){$("#timezone").val(a.timezone)})})};getGeoDetails(".typeahead");


var getGeoDetails=function(a){var b=[],d="http://dev.akashvaani.com/api/",e=function(a,c){$.getJSON(d+"php/getGeoDetails.php",{name_startsWith:a,maxRows:6},function(a){b=[];var d=a.geonames;$.each(d,function(a,c){var d=c.place_name+" "+c.country_code;b.push({value:d,latitude:c.latitude,longitude:c.longitude,countryCode:c.country_code,timeZoneId:c.timezone_id})}),c(b)})};$(a).typeahead({minLength:3},{source:function(a,b){e(a,b)}}),$(a).on("typeahead:selected",function(a,b){var c=b.timeZoneId,e=$('input[name="dst"]:checked').length>0;$("#latitudematch").val(b.latitude),$("#longitudematch").val(b.longitude),$.getJSON(d+"php/getGeoDetails.php",{time_zone_id:c,isDst:e},function(a){$("#timezonematch").val(a.timezone)})})};getGeoDetails(".typeaheadmach");