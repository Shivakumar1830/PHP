<?php

function display_board($board) {
    echo " {$board[0]} | {$board[1]} | {$board[2]} \n";
    echo "-----------\n";
    echo " {$board[3]} | {$board[4]} | {$board[5]} \n";
    echo "-----------\n";
    echo " {$board[6]} | {$board[7]} | {$board[8]} \n";
}

function is_valid_move($board, $position) {
    return $board[$position] === ' ';
}

function game_over($board) {
    for ($i = 0; $i < 9; $i += 3) {
        if ($board[$i] !== ' ' && $board[$i] === $board[$i + 1] && $board[$i] === $board[$i + 2]) {
            return true;
        }
    }
    for ($i = 0; $i < 3; $i++) {
        if ($board[$i] !== ' ' && $board[$i] === $board[$i + 3] && $board[$i] === $board[$i + 6]) {
            return true;
        }
    }
    if (($board[0] !== ' ' && $board[0] === $board[4] && $board[0] === $board[8]) ||
        ($board[2] !== ' ' && $board[2] === $board[4] && $board[2] === $board[6])) {
        return true;
    }
    return !in_array(' ', $board);
}
function get_winner($board) {
    
    for ($i = 0; $i < 9; $i += 3) {
        if ($board[$i] !== ' ' && $board[$i] === $board[$i + 1] && $board[$i] === $board[$i + 2]) {
            return $board[$i];
        }
    }
    for ($i = 0; $i < 3; $i++) {
        if ($board[$i] !== ' ' && $board[$i] === $board[$i + 3] && $board[$i] === $board[$i + 6]) {
            return $board[$i];
        }
    }
    if (($board[0] !== ' ' && $board[0] === $board[4] && $board[0] === $board[8]) ||
        ($board[2] !== ' ' && $board[2] === $board[4] && $board[2] === $board[6])) {
        return $board[4];
    }
    return null;
}

function play_game() {
    $board = array_fill(0, 9, ' '); 
    $current_player = 'X';

    while (!game_over($board)) {
        display_board($board);
        echo "Player $current_player's turn. Enter position (0-8): ";
        $position = (int) readline();
        if ($position < 0 || $position > 8 || !is_valid_move($board, $position)) {
            echo "Invalid move! Try again.\n";
            continue;
        }
        $board[$position] = $current_player;
        $winner = get_winner($board);
        if ($winner) {
            display_board($board);
            echo "Player $winner wins!\n";
            return;
        }
        $current_player = ($current_player === 'X') ? 'O' : 'X';
    }

    display_board($board);
    echo "It's a draw!\n";
}
play_game();
?>
