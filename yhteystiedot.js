$.getJSON('content.json', function(data) {
    document.getElementById('yt1').innerHTML = data.yhteystiedot.title;
    document.getElementById('yt2').innerHTML = data.yhteystiedot.title2;
    document.getElementById('yt3').innerHTML = data.yhteystiedot.cont;
    document.getElementById('yt4').innerHTML = data.yhteystiedot.title3;
    document.getElementById('yt5').innerHTML = data.yhteystiedot.cont2;
    document.getElementById('footer1').innerHTML = data.footer1.cont;
    document.getElementById('footer2').innerHTML = data.footer2.cont;
    })
