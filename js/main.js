var Turn=0;
var St=[];
var Doll=[];
var Rand=[0,1,2,3,4,5,6,7,8,9,];


var Items=["","","","","","","","","","","",""];


var St_Rand1=[0,1,2,3,4,5,6,7,8,9,10,11];
var St_Rand2=[0,1,2,3,4,5,6,7,8,9,10,11];
var St_Rand3=[0,1,2,3,4,5,6,7,8,9,10,11];
var St_Rand4=[0,1,2,3,4,5,6,7,8,9,10,11];
var St_Rand5=[0,1,2,3,4,5,6,7,8,9,10,11];
var Up=[];
var Cnt={
		"a": 0,
		"b": 0,
		"c": 0,
		"d": 0,
		"e": 0,
		"p": 0
};
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
		Up['a']=St_Rand1;

		for (i =0; i <30; i++) {
			Rnd_a = Math.floor( Math.random() * 12);
			Rnd_b = Math.floor( Math.random() * 12);
			Tmp=St_Rand2[Rnd_a];
			St_Rand2[Rnd_a]=St_Rand2[Rnd_b];
			St_Rand2[Rnd_b]=Tmp;
		}
		 Up['b']=St_Rand2;

		for (i =0; i <20; i++) {
			Rnd_a = Math.floor( Math.random() * 12);
			Rnd_b = Math.floor( Math.random() * 12);
			Tmp=St_Rand3[Rnd_a];
			St_Rand3[Rnd_a]=St_Rand3[Rnd_b];
			St_Rand3[Rnd_b]=Tmp;
		}
		Up['c']=St_Rand3;

		for (i =0; i <45; i++) {
			Rnd_a = Math.floor( Math.random() * 12);
			Rnd_b = Math.floor( Math.random() * 12);
			Tmp=St_Rand4[Rnd_a];
			St_Rand4[Rnd_a]=St_Rand4[Rnd_b];
			St_Rand4[Rnd_b]=Tmp;
		}
		Up['d']=St_Rand4;

		for (i =0; i <35; i++) {
			Rnd_a = Math.floor( Math.random() * 12);
			Rnd_b = Math.floor( Math.random() * 12);
			Tmp=St_Rand5[Rnd_a];
			St_Rand5[Rnd_a]=St_Rand5[Rnd_b];
			St_Rand5[Rnd_b]=Tmp;
		}
		Up['e']=St_Rand5;

		console.log(Doll['a']);
		console.log(Doll['b']);
		console.log(Doll['c']);
		console.log(Doll['d']);

		console.log(Up['a']);
		console.log(Up['b']);
		console.log(Up['c']);
		console.log(Up['d']);
		console.log(Up['e']);
	});

	$('.turn_start').on('click',function(){
		$('.guard').hide();
			
		$('.player_c').animate({'top':'110px'},100);
		$('.player_e').slideUp(100).animate({'top':'110px'},0);		

		$('#rest'+Turn).animate({'top':'190px','right':'200px','height':'360px','width':'240px','border-width':'10px','border-radius':'20px'},500).delay(500).fadeOut(500);
		$('.main_card').delay(500).fadeIn(0).text(Up['e'][Turn]);
    });

	$('.player_d').on('click',function(){
		Tmp_Id=$(this).attr('id')+'1';
		Tmp_No=$(this).attr('id').replace('down_','');
		$('.f'+Tmp_No).css('color','#e0e0e0');		

		$('.player_c').animate({'top':'110px'},100);


		if($('#'+Tmp_Id).css("display") == 'none'){
			for(i=Turn ;i<12;i++){
				$(this).next().children('.f'+Up[Tmp_No][i]).css('color','#906000');		
			}
			$('#'+Tmp_Id).animate({'top':'145px'},0).slideDown(200);		

		}else{
			$('#'+Tmp_Id).animate({'top':'110px'},0).slideUp(150);		
		}
    });

    $('.td_b2').on('click','.p_pts_on',function(){
		$('.guard').show();
        $(this).removeClass('p_pts_on');
        No=$(this).attr('id').replace('i','');
		$.post({
			url:'post_read_turn.php',
			dataType: 'json',
			data:{
				'turn':Turn,
				'bet':No,
				'data_a':Up['a'][Turn],
				'data_b':Up['b'][Turn],
				'data_c':Up['c'][Turn],
				'data_d':Up['d'][Turn],
				'data_e':Up['e'][Turn],

				'unit_a':Doll['a'],
				'unit_b':Doll['b'],
				'unit_c':Doll['c'],
				'unit_d':Doll['d'],
				'unit_p':Doll['p'],
			},
		}).done(function(data2, textStatus, jqXHR){
			Pts[data2.z]=parseFloat(Pts[data2.z])+parseFloat(data2.pts);
			Cnt[data2.z]++;

			if(data2.ring==2){
				 $('#sub_' + data2.z).css('color','#ff90a0');

			}else if(data2.ring==1){
				 $('#ring_' + data2.z).css('color','#ff90a0');
			}

            $('.main_card').html(data2.cord);


            $('#count_a').text(Cnt['a']);
            $('#count_b').text(Cnt['b']);
            $('#count_c').text(Cnt['c']);
            $('#count_d').text(Cnt['d']);

            $('.pl1').children('.player_a').text(Pts['a']);
            $('.pl2').children('.player_a').text(Pts['b']);
            $('.pl3').children('.player_a').text(Pts['c']);
            $('.pl4').children('.player_a').text(Pts['d']);
            $('.td_a').text(Pts['p']);

            $('#set_z').text(data2.z);

			$('#set_a').delay(200).animate({'top':'150px'},500).text(Items[Up['a'][Turn]]);
			$('#set_b').delay(250).animate({'top':'150px'},500).text(Items[Up['b'][Turn]]);
			$('#set_c').delay(300).animate({'top':'150px'},500).text(Items[Up['c'][Turn]]);
			$('#set_d').delay(350).animate({'top':'150px'},500).text(Items[Up['d'][Turn]]);

			Tmp=$('count_'+data2.z).text();
			Tmp=parseFloat(Tmp) + 1;
			$('count_'+data2.z).text(Tmp);

			if(data2.z=='p'){
				$('.main_card').delay(2000).animate({'top':'90vh','right':'550px','height':'0','width':'0','border-width':'0px','border-radius':'20px'},300).fadeOut(0).animate({'top':'190px','right':'200px','height':'360px','width':'240px','border-width':'10px','border-radius':'20px'},0);
			}else if(data2.z=='a'){
				$('.main_card').delay(2000).animate({'top':'50px','right':'540px','height':'0','width':'0','border-width':'0px','border-radius':'20px'},300).fadeOut(0).animate({'top':'190px','right':'200px','height':'360px','width':'240px','border-width':'10px','border-radius':'20px'},0);

			}else if(data2.z=='b'){
				$('.main_card').delay(2000).animate({'top':'50px','right':'420px','height':'0','width':'0','border-width':'0px','border-radius':'20px'},300).fadeOut(0).animate({'top':'190px','right':'200px','height':'360px','width':'240px','border-width':'10px','border-radius':'20px'},0);

			}else if(data2.z=='c'){
				$('.main_card').delay(2000).animate({'top':'50px','right':'300px','height':'0','width':'0','border-width':'0px','border-radius':'20px'},300).fadeOut(0).animate({'top':'190px','right':'200px','height':'360px','width':'240px','border-width':'10px','border-radius':'20px'},0);

			}else if(data2.z=='d'){
				$('.main_card').delay(2000).animate({'top':'50px','right':'180px','height':'0','width':'0','border-width':'0px','border-radius':'20px'},300).fadeOut(0).animate({'top':'190px','right':'200px','height':'360px','width':'240px','border-width':'10px','border-radius':'20px'},0);

			}else if(data2.z=='l'){
				$('.main_card').delay(2000).animate({'right':'700px'},800).fadeOut(0).animate({'top':'190px','right':'200px','height':'360px','width':'240px','border-width':'10px','border-radius':'20px'},0);
			}

			console.log(data2);
			console.log(Turn);
			Turn++;
		});
    });
});
