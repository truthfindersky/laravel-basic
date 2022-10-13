// 22. Laravel Raw SQL Queries | Basic CURD Operation 

function SendData() {
    var myName = document.getElementById('myName').value;
    var myGroup = document.getElementById('myGroup').value;
    var myRoll = document.getElementById('myRoll').value;
    
    var url = "/sqlinsertData";
    var data = { name: myName, group: myGroup, roll: myRoll };

    axios.post(url, data)
        .then(function(response) {
            alert(response.data);
        })
        .catch(function(error) {
            alert(Error);
        });

}

function DeleteData() {
    var myID = document.getElementById('myID').value;

    var url = "/sqldeleteData";
    var data = { id: myID };

    axios.post(url, data)
        .then(function(response) {
            alert(response.data);
        })
        .catch(function(error) {
            alert(Error);
        });
}

function UpdateData() {
    var myName = document.getElementById('myName').value;
    var myGroup = document.getElementById('myGroup').value;
    var myRoll = document.getElementById('myRoll').value;
    var myId = document.getElementById('myId').value;

    var url = "/sqlupdateData";
    var data = { name: myName, group: myGroup, roll: myRoll, id: myId };

    axios.post(url, data)
        .then(function(response) {
            alert(response.data);
        })
        .catch(function(error) {
            alert(Error);
        });
}