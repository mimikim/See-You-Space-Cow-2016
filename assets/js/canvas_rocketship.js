// rocketship script for contact page
function create_rocketship() {

    var canvas = document.getElementById('rocket-canvas');

    if (canvas !== null && canvas.getContext){

        // canvas drawing will be 2D
        var rocket = canvas.getContext('2d');

        // determine center of canvas
        var centerX = canvas.width / 2;

        // determine consistent styles
        var rocket_body = '#C96576',
            stroke_color = '#222';

        var line_join = 'round',
            line_width = 8;

        // create rocket body
        rocket.beginPath();
        rocket.lineJoin = line_join;
        rocket.moveTo( centerX, 20 );
        rocket.quadraticCurveTo(0, 150, 120, 450);
        rocket.lineTo(280, 450);
        rocket.quadraticCurveTo(400, 150, centerX, 20);
        rocket.closePath();
        rocket.fillStyle = rocket_body;
        rocket.fill();
        rocket.lineWidth = line_width;
        rocket.strokeStyle = stroke_color;
        rocket.stroke();

        // rocket window
        rocket.beginPath();
        rocket.arc(200, 200, 60, 0, 2*Math.PI);
        rocket.fillStyle = '#fff';
        rocket.fill();
        rocket.lineWidth = line_width;
        rocket.strokeStyle = stroke_color;
        rocket.stroke();

        rocket.beginPath();
        rocket.arc(200, 200, 40, 0, 2*Math.PI);
        rocket.fillStyle = '#fff';
        rocket.fill();
        rocket.lineWidth = line_width;
        rocket.strokeStyle = stroke_color;
        rocket.stroke();

        // rocket wings
        rocket.beginPath();
        rocket.lineJoin = line_join;
        rocket.moveTo(120, 450);
        rocket.lineTo(90, 500);
        rocket.lineTo(310, 500);
        rocket.lineTo(280, 450);
        rocket.closePath();
        rocket.fillStyle = rocket_body;
        rocket.fill();
        rocket.lineWidth = line_width;
        rocket.strokeStyle = stroke_color;
        rocket.stroke();

    }
}

function blast_off() {

    var canvas = document.getElementById('rocket-canvas');

    if (canvas.getContext){

        // canvas drawing will be 2D
        var rocket = canvas.getContext('2d');

        // determine center of canvas
        var centerX = canvas.width / 2;

        // determine consistent styles
        var rocket_body = '#C96576',
            stroke_color = '#222';

        var line_join = 'round',
            line_width = 8;

        // fuel combustion!
        rocket.beginPath();
        rocket.lineJoin = line_join;
        rocket.moveTo(150, 500);
        rocket.quadraticCurveTo(100, 600, 200, 650);
        rocket.quadraticCurveTo(300, 600, 250, 500);
        rocket.closePath();
        rocket.fillStyle = 'orange';
        rocket.fill();
        rocket.lineWidth = line_width;
        rocket.strokeStyle = stroke_color;
        rocket.stroke();

        rocket.beginPath();
        rocket.lineJoin = line_join;
        rocket.moveTo(180, 500);
        rocket.quadraticCurveTo(150, 550, 200, 580);
        rocket.quadraticCurveTo(250, 550, 220, 500);
        rocket.closePath();
        rocket.fillStyle = 'yellow';
        rocket.fill();
        rocket.lineWidth = line_width;
        rocket.strokeStyle = stroke_color;
        rocket.stroke();

    }

    var rocket_container = $('.rocket-container').find('.canvas-container');

    $(rocket_container).addClass('blast-off');

    setTimeout(function(){
        $(rocket_container).removeClass('blast-off');
    }, 5000);


}