var $element1 = $('input[type="range"][id="r1"]');
var $element2 = $('input[type="range"][id="r2"]');
var $element3 = $('input[type="range"][id="r3"]');
var $element4 = $('input[type="range"][id="r4"]');
var $element5 = $('input[type="range"][id="r5"]');
var $output = $('output');

function updateOutput(el, val) {
  el.textContent = val;
}

$element1
  .rangeslider({
    polyfill: false,
    onInit: function() {
      updateOutput($output[0], this.value);
    }
  })
  .on('input', function() {
    updateOutput($output[0], this.value);
  });
  
$element2
  .rangeslider({
    polyfill: false,
    onInit: function() {
      updateOutput($output[1], this.value);
    }
  })
  .on('input', function() {
    updateOutput($output[1], this.value);
  });
  
$element3
  .rangeslider({
    polyfill: false,
    onInit: function() {
      updateOutput($output[2], this.value);
    }
  })
  .on('input', function() {
    updateOutput($output[2], this.value);
  });
  
$element4
  .rangeslider({
    polyfill: false,
    onInit: function() {
      updateOutput($output[3], this.value);
    }
  })
  .on('input', function() {
    updateOutput($output[3], this.value);
  });
  
$element5
  .rangeslider({
    polyfill: false,
    onInit: function() {
      updateOutput($output[4], this.value);
    }
  })
  .on('input', function() {
    updateOutput($output[4], this.value);
  });