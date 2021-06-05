const { default: SignaturePad } = require('signature_pad');
require('./bootstrap');
$ = require('jquery');

canvas = $('#signature-pad').get(0);
console.log(canvas);

// Adjust canvas coordinate space taking into account pixel ratio,
// to make it look crisp on mobile devices.
// This also causes canvas to be cleared.
function resizeCanvas() {
    // When zoomed out to less than 100%, for some very strange reason,
    // some browsers report devicePixelRatio as less than 1
    // and only part of the canvas is cleared then.
    var ratio = Math.max(window.devicePixelRatio || 1, 1);
    canvas.width = canvas.offsetWidth * ratio;
    canvas.height = canvas.offsetHeight * ratio;
    canvas.getContext("2d").scale(ratio, ratio);
}

window.onresize = resizeCanvas;
resizeCanvas();

var signaturepad = new SignaturePad(canvas, {
    backgroundColor: 'rgb(255,255,255)'
});

var clearBtn = $('#clear-btn');
clearBtn.on('click', function () { signaturepad.clear(); });