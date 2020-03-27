var Turn=0;
var St=[];
var Doll=[];
var Rand=[0,1,2,3,4,5,6,7,8,9,];
var Items=["","","","","","","","","","","",""];
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
		$('.pop_back,.pop_a').show();
		Img=$(this).children('.sel_a').attr('src');
		Sel=$(this).children('.sel_b').html();
		Name=$(this).children('.sel_c').html();

		$('.pop_a_3').html(Sel);
		$('.pop_a_2').html(Name);
		$('.pop_a_1').attr('src',Img);

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

	$('#reset').on('click',function(){
		$('.pop_back,.pop_a').hide();
    });


	$('#start').on('click',function(){
		$('.pop_back,.pop_a').fadeOut(500);
		$('.page_01').fadeOut(500);
		$('.page_02').fadeIn(500);

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

	$('.turn_start').on('click',function(){
		$('#rest'+Turn).animate({'top':'190px','right':'200px','height':'360px','width':'240px','border-width':'10px','border-radius':'20px'},500).delay(500).fadeOut(500);
		$('.main_card').delay(500).fadeIn(0).text(Up_e[Turn]);
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

				'unit_a':Doll['a'],
				'unit_b':Doll['b'],
				'unit_c':Doll['c'],
				'unit_d':Doll['d'],
				'unit_p':Doll['p'],
			},
		}).done(function(data2, textStatus, jqXHR){
			Pts[data2.z]=parseInt(Pts[data2.z])+parseInt(data2.pts);

            $('#set_z').text(data2.z);

			$('#set_a').delay(200).animate({'top':'150px'},500).text(Items[data2.a]);
			$('#set_b').delay(250).animate({'top':'150px'},500).text(Items[data2.b]);
			$('#set_c').delay(300).animate({'top':'150px'},500).text(Items[data2.c]);
			$('#set_d').delay(350).animate({'top':'150px'},500).text(Items[data2.d]);
	

			Tmp=$('count_'+data2.z).text();
			Tmp=parseInt(Tmp) + 1;
			$('count_'+data2.z).text(Tmp);

			if(data2.v){
				$('#sub_' + data2.z).addClass('sub_on');
			}
			
			if(data2.w){
				$('#ring_' + data2.z).addClass('ring_on');
			}
            $('.td_a').text(Turn);
			console.log(data2);
	
		});
        Turn++;
    });

});
