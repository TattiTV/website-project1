$.getJSON('content.json', function(data) {
    document.getElementById('introduction').innerHTML = data.introduction.cont;
    document.getElementById('info').innerHTML = data.info.cont;
    document.getElementById('name1').innerHTML = data.person1.name;
    document.getElementById('person1').innerHTML = data.person1.cont;
    document.getElementById('name2').innerHTML = data.person2.name;
    document.getElementById('person2').innerHTML = data.person2.cont;
    document.getElementById('footer1').innerHTML = data.footer1.cont;
    document.getElementById('footer2').innerHTML = data.footer2.cont;
    })