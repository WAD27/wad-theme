$(document).ready(function() {

  images()

})

function images() {
  $('imgLiquidFill').imgLiquid()
  $('imgLiquidNoFill').imgLiquid({fill:false})
}
