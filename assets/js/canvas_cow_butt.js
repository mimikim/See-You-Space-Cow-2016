var canvas_cow = canvas_cow || (function(){
    function load_cow_butt() {

        var cow_canvas = document.getElementById('cow-butthole'),
            eyes_open = true;

        var attrs = {
            'white'        : '#ffffff',
            'cow_white'    : '#f8f8ff',
            'cow_nose'     : '#fdcad5',
            'cow_helmet'   : '#DCDCDC',
            'hoof'         : '#B8A381',
            'cow_spot'     : '#646873',
            'stroke_color' : '#111',
            'line_join'    : 'round',
            'line_width'   : 8
        };

        if (cow_canvas !== null && cow_canvas.getContext){
            var cow = cow_canvas.getContext('2d');
            cow_butt( cow_canvas, cow, attrs );
            cow_butt_eyes( cow, attrs, false );

            setInterval(function() {
                // clear canvas before drawing again
                cow_clear( cow_canvas, cow );
                cow_butt( cow_canvas, cow, attrs );
                cow_butt_eyes( cow, attrs, eyes_open );
                eyes_open = !eyes_open;
            }, 1000);
        }
    }

    // clear canvas to ensure layered animation is clear
    function cow_clear( cow_canvas, cow ) {
        cow.clearRect(0, 0, cow_canvas.width, cow_canvas.height );
    }

    function cow_butt( cow_canvas, cow, style ) {
        cow_clear( cow_canvas, cow );
        // helmet
        cow.save();
        cow.rotate(-50*Math.PI/180);
        cow.scale(0.9, 1);
        cow.beginPath();
        cow.arc(100, 320, 100, 0, Math.PI*2, false);
        cow.globalAlpha=0.4;
        cow.fillStyle = style.cow_helmet;
        cow.fill();
        cow.globalAlpha=1;
        cow.lineWidth = style.line_width;
        cow.strokeStyle = style.stroke_color;
        cow.stroke();
        cow.closePath();
        cow.restore();

        // helmet glare
        cow.beginPath();
        cow.moveTo(320, 55);
        cow.quadraticCurveTo(365, 70, 382, 110);
        cow.quadraticCurveTo( 385, 118, 384, 135);
        cow.quadraticCurveTo( 360, 70, 320, 55);
        cow.fillStyle = style.white;
        cow.fill();

        // ear right
        cow.beginPath();
        cow.moveTo(290, 84);
        cow.bezierCurveTo(300, 50, 350, 90, 310, 90);
        cow.closePath();
        cow.lineCap = style.line_join;
        cow.fillStyle = style.cow_spot;
        cow.fill();
        cow.lineWidth = style.line_width;
        cow.strokeStyle = style.stroke_color;
        cow.stroke();

        // face
        cow.beginPath();
        cow.moveTo(260, 84);
        cow.lineTo(229, 100);
        cow.lineTo(260, 120);
        cow.closePath();
        cow.fillStyle = style.cow_white;
        cow.fill();
        cow.beginPath();
        cow.lineCap = style.line_join;
        cow.moveTo(250, 89);
        cow.quadraticCurveTo(300, 55, 355, 150);
        cow.bezierCurveTo(390, 210, 280, 240, 270, 180);
        cow.fillStyle = style.cow_white;
        cow.fill();
        cow.lineWidth = style.line_width;
        cow.strokeStyle = style.stroke_color;
        cow.stroke();

        // ear left
        cow.beginPath();
        cow.lineCap = style.line_join;
        cow.moveTo(230, 110);
        cow.bezierCurveTo(230, 40, 300, 120, 230, 100);
        cow.closePath();
        cow.lineCap = style.line_join;
        cow.fillStyle = style.cow_white;
        cow.fill();
        cow.lineWidth = style.line_width;
        cow.strokeStyle = style.stroke_color;
        cow.stroke();

        // nose
        cow.beginPath();
        cow.moveTo(345, 140);
        cow.quadraticCurveTo(290, 144, 282, 196);
        cow.bezierCurveTo(300, 227, 395, 202, 344, 140);
        cow.fillStyle = style.cow_nose;
        cow.fill();

        // nostril left
        cow.beginPath();
        cow.moveTo(313, 173);
        cow.quadraticCurveTo(321, 173, 320, 180);
        cow.quadraticCurveTo(314, 179, 313, 173);
        cow.fillStyle = style.stroke_color;
        cow.fill();

        // nostril right
        cow.beginPath();
        cow.moveTo(345, 163);
        cow.quadraticCurveTo(340, 167, 342, 172);
        cow.quadraticCurveTo(348, 167, 345, 163);
        cow.fillStyle = style.stroke_color;
        cow.fill();

        // butt (__)__)
        cow.beginPath();
        cow.lineJoin = style.line_join;
        cow.moveTo(90, 343);
        cow.lineTo(100, 328);
        cow.bezierCurveTo(8, 170, 300, 200, 183, 343);
        cow.lineTo(194, 360);
        //right
        cow.bezierCurveTo(285, 296, 308, 105, 200, 75);
        //left
        cow.bezierCurveTo(-20, 40, 0, 260, 90, 343);
        cow.closePath();
        cow.fillStyle = style.cow_white;
        cow.fill();
        cow.lineWidth = style.line_width;
        cow.strokeStyle = style.stroke_color;
        cow.stroke();

        // hoof left
        cow.beginPath();
        cow.moveTo(89, 339);
        cow.lineTo(96, 328);
        cow.quadraticCurveTo(90, 320, 90, 316);
        cow.lineTo(79, 327);
        cow.closePath();
        cow.fillStyle = style.hoof;
        cow.fill();

        // hoof right
        cow.beginPath();
        cow.moveTo(188, 343);
        cow.lineTo(195, 355);
        cow.quadraticCurveTo(200, 350, 207, 344);
        cow.lineTo(198, 330);
        cow.closePath();
        cow.fillStyle = style.hoof;
        cow.fill();

        // arsehole (x)
        cow.beginPath();
        cow.moveTo(132, 160);
        cow.lineTo(150, 178);
        cow.closePath();
        cow.lineWidth = 5;
        cow.strokeStyle = style.stroke_color;
        cow.stroke();
        cow.beginPath();
        cow.moveTo(148, 160);
        cow.lineTo(132, 178);
        cow.lineCap = style.line_join;
        cow.lineWidth = 5;
        cow.strokeStyle = style.stroke_color;
        cow.stroke();

        // tail
        cow.save();
        cow.beginPath();
        cow.lineCap = style.line_join;
        cow.moveTo(130, 118);
        cow.bezierCurveTo(70, 168, 3, 76, 45, 40);
        cow.bezierCurveTo(-20, 90, 80, 200, 155, 120);
        cow.fillStyle = style.cow_white;
        cow.fill();
        cow.lineWidth = style.line_width;
        cow.strokeStyle = style.stroke_color;
        cow.stroke();
        cow.restore();

        // cow spot
        cow.beginPath();
        cow.moveTo(190, 77);
        cow.bezierCurveTo(280, 90, 270, 210, 267, 200);
        cow.quadraticCurveTo(220, 200, 210, 120);
        cow.quadraticCurveTo(180, 100, 190, 77);
        cow.fillStyle = style.cow_spot;
        cow.fill();
    }

    function cow_butt_eyes( cow, style, open ) {

        // eye spot
        cow.beginPath();
        cow.moveTo(275, 83);
        cow.quadraticCurveTo(300, 83, 326, 113);
        cow.bezierCurveTo(300, 125, 280, 110, 275, 84);
        cow.fillStyle = style.cow_spot;
        cow.fill();

        // eye left
        cow.beginPath();
        if (open) {
            // if eyes are open
            cow.arc(275, 114, 4, 0, Math.PI * 2, false);
            cow.fillStyle = style.stroke_color;
            cow.fill();
        } else {
            cow.lineWidth = 4;
            cow.moveTo(268, 112);
            cow.lineTo(278, 112);
            cow.lineTo(273, 122);
            cow.stroke();
        }

        // eye right
        cow.beginPath();
        if (open) {
            cow.arc(300, 102, 4, 0, Math.PI * 2, false);
            cow.fillStyle = style.stroke_color;
            cow.fill();
        } else {
            cow.lineWidth = 4;
            cow.moveTo(300, 98);
            cow.lineTo(298, 104);
            cow.lineTo(308, 105);
            cow.stroke();
        }
    }

    return {
        init : load_cow_butt
    };
})();