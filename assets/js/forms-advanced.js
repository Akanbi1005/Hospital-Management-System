$(function(){var t=$("#basicNoUISlider");t.length>0&&noUiSlider.create(t[0],{start:[20,80],range:{min:[0],max:[100]}});var e=$("#stepNoUISlider");e.length>0&&noUiSlider.create(e[0],{start:[200,1e3],range:{min:[0],max:[1800]},step:100,tooltips:!0,connect:!0}),$(".input-datepicker").datepicker({format:"mm/dd/yyyy"}),$(".input-datepicker-autoclose").datepicker({autoclose:!0,format:"mm/dd/yyyy"}),$(".input-datepicker-multiple").datepicker({multidate:!0,format:"mm/dd/yyyy"}),$(".input-datepicker-range").datepicker({format:"mm/dd/yyyy"}),$("input[name='touchspin0']").TouchSpin({buttondown_class:"btn btn-secondary",buttonup_class:"btn btn-secondary"}),$("input[name='touchspin1']").TouchSpin({min:0,max:100,step:.1,decimals:2,boostat:5,maxboostedstep:10,postfix:"%",buttondown_class:"btn btn-secondary",buttonup_class:"btn btn-secondary"}),$("input[name='touchspin2']").TouchSpin({min:-1e9,max:1e9,step:50,maxboostedstep:1e7,prefix:"$",buttondown_class:"btn btn-secondary",buttonup_class:"btn btn-secondary"}),$(".selectpicker-primary").selectpicker({style:"btn-primary",size:4}),$(".selectpicker-secondary").selectpicker({style:"btn-secondary",size:4}),$(".selectpicker-light").selectpicker({style:"btn-outline-light",size:4}),$("#multiselect1").multiSelect()});
$(document).ready(function() {
 // executes when HTML-Document is loaded and DOM is ready
console.log("document is ready");
  
  
// document ready  
});


$(window).load(function() {
 // executes when complete page is fully loaded, including all frames, objects and images
console.log("window is loaded");
  
  
// window load  
});