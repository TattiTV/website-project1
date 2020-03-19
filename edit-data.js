// funktio, jota kutsutaan tallennusnappia klikatessa
function submit() {
    // muokattava data muuttujiin
    var edit1 = $('#introduction').html();
    var edit2 = $('#info').html();
    var edit3 = $('#name1').html();
    var edit4 = $('#person1').html();
    var edit5 = $('#name2').html();
    var edit6 = $('#person2').html();
    var edit7 = $('#footer1').html();
    var edit8 = $('#footer2').html();
    var edit9 = $('#turva1').html();
    var edit10 = $('#turva2').html();
    var edit11 = $('#turva3').html();
    var edit12 = $('#turva4').html();
    var edit13 = $('#turva5').html();
    var edit14 = $('#turva6').html();
    var edit15 = $('#tuli1').html();
    var edit16 = $('#tuli2').html();
    var edit17 = $('#tuli3').html();
    var edit18 = $('#tuli4').html();
    var edit19 = $('#tuli5').html();
    var edit20 = $('#tuli6').html();
    var edit21 = $('#tuli7').html();
    var edit22 = $('#sam1').html();
    var edit23 = $('#sam2').html();
    var edit24 = $('#sam3').html();
    var edit25 = $('#sam4').html();
    var edit26 = $('#sam5').html();
    var edit27 = $('#sam6').html();
    var edit28 = $('#sam7').html();
    var edit29 = $('#yt1').html();
    var edit30 = $('#yt2').html();
    var edit31 = $('#yt3').html();
    var edit32 = $('#yt4').html();
    var edit33 = $('#yt5').html();
    
    // ajax tulille
    $.ajax({
        type: "POST",
        url: "edit.php",
        data: {action: "edits",
               post1: edit1,
               post2: edit2,
               post3: edit3,
               post4: edit4,
               post5: edit5,
               post6: edit6,
               post7: edit7,
               post8: edit8,
               post9: edit9,
               post10: edit10,
               post11: edit11,
               post12: edit12,
               post13: edit13,
               post14: edit14,
               post15: edit15,
               post16: edit16,
               post17: edit17,
               post18: edit18,
               post19: edit19,
               post20: edit20,
               post21: edit21,
               post22: edit22,
               post23: edit23,
               post24: edit24,
               post25: edit25,
               post26: edit26,
               post27: edit27,
               post28: edit28,
               post29: edit29,
               post30: edit30,
               post31: edit31,
               post32: edit32,
               post33: edit33
               },
        success: function response(response) {
            console.log(response); // konsoliin tieto onnistuneesta kutsusta
        }
    });
}

$.getJSON('content.json', function(data) {
    document.getElementById('introduction').innerHTML = data.introduction.cont;
    document.getElementById('info').innerHTML = data.info.cont;
    document.getElementById('name1').innerHTML = data.person1.name;
    document.getElementById('person1').innerHTML = data.person1.cont;
    document.getElementById('name2').innerHTML = data.person2.name;
    document.getElementById('person2').innerHTML = data.person2.cont;
    document.getElementById('footer1').innerHTML = data.footer1.cont;
    document.getElementById('footer2').innerHTML = data.footer2.cont;
    document.getElementById('turva1').innerHTML = data.turva.title;
    document.getElementById('turva2').innerHTML = data.turva.des;
    document.getElementById('turva3').innerHTML = data.turva.title2;
    document.getElementById('turva4').innerHTML = data.turva.cont1;
    document.getElementById('turva5').innerHTML = data.turva.title3;
    document.getElementById('turva6').innerHTML = data.turva.title4;
    document.getElementById('tuli1').innerHTML = data.tuli.title;
    document.getElementById('tuli2').innerHTML = data.tuli.des;
    document.getElementById('tuli3').innerHTML = data.tuli.title2;
    document.getElementById('tuli4').innerHTML = data.tuli.des2;
    document.getElementById('tuli5').innerHTML = data.tuli.title3;
    document.getElementById('tuli6').innerHTML = data.tuli.des3;
    document.getElementById('tuli7').innerHTML = data.tuli.title4;
    document.getElementById('sam1').innerHTML = data.sammutus.title;
    document.getElementById('sam2').innerHTML = data.sammutus.title2;
    document.getElementById('sam3').innerHTML = data.sammutus.des;
    document.getElementById('sam4').innerHTML = data.sammutus.title3;
    document.getElementById('sam5').innerHTML = data.sammutus.des2;
    document.getElementById('sam6').innerHTML = data.sammutus.title4;
    document.getElementById('sam7').innerHTML = data.sammutus.des3;
    document.getElementById('yt1').innerHTML = data.yhteystiedot.title;
    document.getElementById('yt2').innerHTML = data.yhteystiedot.title2;
    document.getElementById('yt3').innerHTML = data.yhteystiedot.cont;
    document.getElementById('yt4').innerHTML = data.yhteystiedot.title3;
    document.getElementById('yt5').innerHTML = data.yhteystiedot.cont2;
    })