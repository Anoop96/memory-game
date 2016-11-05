var mainList = [];
var randomCount = [];
var soundFreq = [];
var time = 500;
var counter = 0;
var userCounter = 0;
var takeInput = false;
var interval = null;
var level = null;
var duration = 0.5;
var notChnaged = true;

var context = new AudioContext();

function removeOptions(){
    $("#gameOptions").fadeOut();
    setTimeout(displayGame, 500);
}
function displayGame(){
    $("#mainGame").fadeIn();
    notChnaged = false;
}

$(document).ready(function(){
    for(var i = 1; i <= 9; i++){
        var tempName = "#box_" + i.toString();
        mainList.push(tempName);
    }
});

function randomGenerator(){
    return Math.floor(Math.random() * (900 - 300 + 1)) + 300;
}

function selectColors(){
    if(notChnaged === true)
        return;
    randomCount.length = 0;
    soundFreq.length = 0;
    level = 3;
    counter = 0;
    takeInput = false;
    userCounter = 0;
    for(var i = 0; i < level; i++){
        var value = randomGenerator();
        randomCount.push(document.querySelector(mainList[value % 9]));
        soundFreq.push(value);
    }
    interval = setInterval(displayColors, time + 5);
}

function displayColors(){
    if(counter === level){
        clearInterval(interval);
        interval = null;
        randomCount[counter - 1].style.opacity = 0.5;
        takeInput = true;
        return;
    }

    var startTime = context.currentTime;
    var oscillator_1 = context.createOscillator();
    var oscillator_2 = context.createOscillator();
    var volume = context.createGain();
    oscillator_1.type = "sawtooth";
    oscillator_2.type = "sawtooth";

    volume.gain.volume = 0.1;
    oscillator_1.connect(volume);
    oscillator_2.connect(volume);
    volume.connect(context.destination);

    oscillator_1.frequency.value = soundFreq[counter] + 1;
    oscillator_2.frequency.value = soundFreq[counter] - 1;

    if(counter === level - 1){
        volume.gain.setValueAtTime(0.1, startTime + duration - 0.05);
        volume.gain.linearRampToValueAtTime(0, startTime + duration);
    }

    oscillator_1.start(startTime);
    oscillator_2.start(startTime);

    oscillator_1.stop(startTime + duration);
    oscillator_2.stop(startTime + duration);

    if(counter === 0)
        randomCount[counter].style.opacity = 1;
    else{
        randomCount[counter - 1].style.opacity = 0.5;
        randomCount[counter].style.opacity = 1;
    }

    counter += 1;
}

function getUserInput(event){
    if(takeInput === false)
        return;

    var idName = event.target.id;
    var correctIdName = randomCount[userCounter].id;

    if(idName === correctIdName){
        playOscillator(userCounter);
        userCounter += 1;
    }
    else{
        playOscillator(userCounter);
        userCounter = 0;
        window.alert("You entered an incorrect pattern");
    }
    if(userCounter === level){
        window.alert("You completed the level");
        window.alert('Please play the game again');
        takeInput = false;
        userCounter = 0;
    }
}

function reduceOpacity(event){
    if(takeInput === false)
        return;
    event.target.style.opacity = 1;
}
function increaseOpacity(event){
    if(takeInput === false)
        return;

    event.target.style.opacity = 0.5;
}

function playOscillator(currentValue){
    var startTime = context.currentTime;
    var oscillator_1 = context.createOscillator();
    var oscillator_2 = context.createOscillator();
    var volume = context.createGain();
    oscillator_1.type = "sawtooth";
    oscillator_2.type = "sawtooth";

    volume.gain.volume = 0.1;
    oscillator_1.connect(volume);
    oscillator_2.connect(volume);
    volume.connect(context.destination);

    oscillator_1.frequency.value = soundFreq[currentValue] + 1;
    oscillator_2.frequency.value = soundFreq[currentValue] - 1;

    oscillator_1.start(startTime);
    oscillator_2.start(startTime);

    oscillator_1.stop(startTime + duration);
    oscillator_2.stop(startTime + duration);
}