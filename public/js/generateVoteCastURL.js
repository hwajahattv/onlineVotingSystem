function generateVoteCastURL(){
    var btn=document.getElementById("openBallotBtn");
    var inputField=document.getElementById("inputID");
    inputID=inputField.value;
    if(inputID!==""){
        document.getElementById("openBallotBtn").href = 'castVote/'+inputID;
    }
    else{
        document.getElementById("openBallotBtn").href = 'javascript:void(0)';
    }
}
