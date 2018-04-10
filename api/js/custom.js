/**
 * Created by Ajeet Kanojia on 5/3/2016.
 */

var planet_abbr = {

    SUN : 'Su',
    MOON : 'Mo',
    MARS : 'Ma',
    MERCURY :'Me',
    JUPITER : 'Ju',
    VENUS : 'Ve',
    SATURN : 'Sa',
    RAHU : 'Ra',
    KETU : 'Ke',
    URANUS : 'Ur',
    NEPTUNE : 'Ne',
    PLUTO : 'pl',
    "सूर्य":"सूर्य","चन्द्र":"चन्द्र","मंगल":"मंगल","बुध":"बुध","बुध ":"बुध","गुरु":"गुरु","शुक्र":"शुक्र","शनि":"शनि","राहु":"राहु","केतु":"केतु","प्लूटो;":"प्लूटो","यूरेनस":"यूरेनस","नेप्चून":"नेप्चून"

};

function getSignArray(data)
{
    var resp = [];

    for (var i =0; i<data.length; i++)
    {
        resp.push(data[i].sign);
    }

    return resp;
}

function getSignPlanetArray(data)
{

    var resp = ['','','','','','','','','','','',''];

    for (var i = 0; i< data.length; i++)
    {
        for (var j = 0; j<data[i]['planet'].length; j++)
        {
            resp[data[i]['sign']-1]+= (planet_abbr[data[i]['planet'][j]]) +' ';
        }

    }

    return resp;
}

function getPlanetArray(data)
{
    var resp = ['','','','','','','','','','','',''];

    for (var i =0; i<data.length; i++)
    {
        for (var j = 0; j<data[i]['planet'].length;j++)
        {
            resp[i]+= (planet_abbr[data[i]['planet'][j]]) +' ';
        }
    }
    return resp;
}
