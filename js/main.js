var Turn=0;
var St=[];
var Doll=[];
var Rand=[0,1,2,3,4,5,6,7,8,9,];
var St_Rand1=[0,1,2,3,4,5,6,7,8,9,10,11];
var St_Rand2=[0,1,2,3,4,5,6,7,8,9,10,11];
var St_Rand3=[0,1,2,3,4,5,6,7,8,9,10,11];
var St_Rand4=[0,1,2,3,4,5,6,7,8,9,10,11];
var St_Rand5=[0,1,2,3,4,5,6,7,8,9,10,11];

var Pts={
		"a": 0,
		"b": 0,
		"c": 0,
		"d": 0,
		"e": 0,
		"p": 0
};

var R=0;
$(function(){ 
    $('.sel').on('click',function(){
		Doll["p"]=$(this).attr('id').replace('s','');
		for (i =0; i <50; i++) {
			Rnd_a = Math.floor( Math.random() * 10);
			Rnd_b = Math.floor( Math.random() * 10);
			Tmp=Rand[Rnd_a];
			Rand[Rnd_a]=Rand[Rnd_b];
			Rand[Rnd_b]=Tmp;
		}

		if(Rand[R] == Doll["p"]){
			R++;
		}
		Doll["a"]=Rand[R];
		R++;

		if(Rand[R] == Doll["p"]){
			R++;
		}
		Doll["b"]=Rand[R];
		R++;

		if(Rand[R] == Doll["p"]){
			R++;
		}
		Doll["c"]=Rand[R];
		R++;

		if(Rand[R] == Doll["p"]){
			R++;
		}
		Doll["d"]=Rand[R];
		R++;
    });

	$('.start').on('click',function(){
		$('.p_pts').addClass('p_pts_on');

		for (i =0; i <40; i++) {
			Rnd_a = Math.floor( Math.random() * 12);
			Rnd_b = Math.floor( Math.random() * 12);
			Tmp=St_Rand1[Rnd_a];
			St_Rand1[Rnd_a]=St_Rand1[Rnd_b];
			St_Rand1[Rnd_b]=Tmp;
		}
		Up_a=St_Rand1;

		for (i =0; i <30; i++) {
			Rnd_a = Math.floor( Math.random() * 12);
			Rnd_b = Math.floor( Math.random() * 12);
			Tmp=St_Rand2[Rnd_a];
			St_Rand2[Rnd_a]=St_Rand2[Rnd_b];
			St_Rand2[Rnd_b]=Tmp;
		}
		 Up_b=St_Rand2;

		for (i =0; i <20; i++) {
			Rnd_a = Math.floor( Math.random() * 12);
			Rnd_b = Math.floor( Math.random() * 12);
			Tmp=St_Rand3[Rnd_a];
			St_Rand3[Rnd_a]=St_Rand3[Rnd_b];
			St_Rand3[Rnd_b]=Tmp;
		}
		Up_c=St_Rand3;

		for (i =0; i <45; i++) {
			Rnd_a = Math.floor( Math.random() * 12);
			Rnd_b = Math.floor( Math.random() * 12);
			Tmp=St_Rand4[Rnd_a];
			St_Rand4[Rnd_a]=St_Rand4[Rnd_b];
			St_Rand4[Rnd_b]=Tmp;
		}
		Up_d=St_Rand4;

		for (i =0; i <35; i++) {
			Rnd_a = Math.floor( Math.random() * 12);
			Rnd_b = Math.floor( Math.random() * 12);
			Tmp=St_Rand5[Rnd_a];
			St_Rand5[Rnd_a]=St_Rand5[Rnd_b];
			St_Rand5[Rnd_b]=Tmp;
		}
		Up_e=St_Rand5;

			console.log(Up_a)
			console.log(Up_b)
			console.log(Up_c)
			console.log(Up_d)
			console.log(Up_e)
	});

    $('.td_b2').on('click','.p_pts_on',function(){
        $(this).removeClass('p_pts_on');
        No=$(this).attr('id').replace('i','');

		$.post({
			url:'post_read_turn.php',
			dataType: 'json',
			data:{
				'turn':Turn,
				'bet':No,
				'data_a':Up_a[Turn],
				'data_b':Up_b[Turn],
				'data_c':Up_c[Turn],
				'data_d':Up_d[Turn],
				'data_e':Up_e[Turn],
			},
		}).done(function(data2, textStatus, jqXHR){
			Pts[data2.z]=parseInt(Pts[data2.z])+parseInt(data2.pts);

            $('#set_z').text(data2.z);
            $('#set_a').text(data2.a +'□'+Pts['a']);
            $('#set_b').text(data2.b +'□'+Pts['b']);
            $('#set_c').text(data2.c +'□'+Pts['c']);
            $('#set_d').text(data2.d +'□'+Pts['d']);
            $('.td_a').text(Turn);

			console.log(data2.pts);
			console.log(Pts);

		});
        Turn++;
    });
});
