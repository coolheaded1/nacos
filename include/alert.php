<style type="text/css">
   
.hide_alert + * {
  text-align: right;
}
.hide_alert + * label {
  width: 45px;
  line-height: 45px;
  cursor: pointer;
  display: inline-block;
  text-align: center;
  background-color: #00b300;
  color: white;
}
.hide_alert {
  position: absolute;
  opacity: 0;
}
.hide_alert + * + .alert {
  margin-top: -45px;
  width: calc(100% -  45px);
}
.hide_alert:checked + *,
.hide_alert:checked + * + * {
  display: none;
}
.alert {
  /*line-height: 45px;*/
  padding: 10px;
  color: white;
  margin-top: 1px;
  z-index: 9999;
}
.successMine{
  background-color: green!important;}


</style>