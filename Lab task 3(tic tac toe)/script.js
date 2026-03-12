let cells = document.querySelectorAll(".cell");
let statusText = document.getElementById("status");
let resetBtn = document.getElementById("resetBtn");

let currentPlayer = "X";
let gameActive = true;

let board = ["","","","","","","","",""];

let winConditions = [
[0,1,2],
[3,4,5],
[6,7,8],
[0,3,6],
[1,4,7],
[2,5,8],
[0,4,8],
[2,4,6]
];

cells.forEach(cell => {
    cell.addEventListener("click", cellClicked);
});

function cellClicked(){

    let index = this.getAttribute("data-index");

    if(board[index] !== "" || !gameActive){
        return;
    }

    board[index] = currentPlayer;
    this.textContent = currentPlayer;

    checkWinner();
}

function checkWinner(){

    let roundWon = false;

    for(let i=0;i<winConditions.length;i++){

        let a = winConditions[i][0];
        let b = winConditions[i][1];
        let c = winConditions[i][2];

        if(board[a] === "" || board[b] === "" || board[c] === ""){
            continue;
        }

        if(board[a] === board[b] && board[b] === board[c]){

            cells[a].classList.add("winningCell");
            cells[b].classList.add("winningCell");
            cells[c].classList.add("winningCell");

            roundWon = true;
            break;
        }
    }

    if(roundWon){
        statusText.textContent = "Player " + currentPlayer + " Wins!";
        gameActive = false;
        return;
    }

    if(!board.includes("")){
        statusText.textContent = "It's a Draw!";
        gameActive = false;
        return;
    }

    currentPlayer = currentPlayer === "X" ? "O" : "X";
    statusText.textContent = "Current Player: " + currentPlayer;
}

resetBtn.addEventListener("click", resetGame);

function resetGame(){

    board = ["","","","","","","","",""];

    cells.forEach(cell=>{
        cell.textContent = "";
        cell.classList.remove("winningCell");
    });

    currentPlayer = "X";
    gameActive = true;

    statusText.textContent = "Current Player: X";
}