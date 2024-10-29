let votesCandidate1 = 0;
let votesCandidate2 = 0;

function increaseVote(candidate) {
    if (candidate === 1) {
        votesCandidate1++;
        applyAnimation('votes-candidate-1', 'pop-up-effect');
    } else if (candidate === 2) {
        votesCandidate2++;
        applyAnimation('votes-candidate-2', 'pop-up-effect');
    }
    updateVotes();
}

function decreaseVote(candidate) {
    if (candidate === 1 && votesCandidate1 > 0) {
        votesCandidate1--;
        applyAnimation('votes-candidate-1', 'pop-down-effect');
    } else if (candidate === 2 && votesCandidate2 > 0) {
        votesCandidate2--;
        applyAnimation('votes-candidate-2', 'pop-down-effect');
    }
    updateVotes();
}

function applyAnimation(elementId, animationClass) {
    const element = document.getElementById(elementId);
    element.classList.remove('pop-up-effect', 'pop-down-effect'); // Reset any previous animation
    void element.offsetWidth; // Trigger reflow to restart the animation
    element.classList.add(animationClass); // Add the new animation class
}

function updateVotes() {
    const totalVotes = votesCandidate1 + votesCandidate2;
    const percentCandidate1 = totalVotes ? (votesCandidate1 / totalVotes * 100).toFixed(2) : 0;
    const percentCandidate2 = totalVotes ? (votesCandidate2 / totalVotes * 100).toFixed(2) : 0;

    // Update kei
    document.getElementById('votes-candidate-1').innerText = votesCandidate1;
    document.getElementById('percent-candidate-1').innerText = `${percentCandidate1}%`;
    document.getElementById('table-votes-candidate-1').innerText = votesCandidate1;
    document.getElementById('table-percent-candidate-1').innerText = `${percentCandidate1}%`;

    // Update azza
    document.getElementById('votes-candidate-2').innerText = votesCandidate2;
    document.getElementById('percent-candidate-2').innerText = `${percentCandidate2}%`;
    document.getElementById('table-votes-candidate-2').innerText = votesCandidate2;
    document.getElementById('table-percent-candidate-2').innerText = `${percentCandidate2}%`;

    // Update Total
    document.getElementById('total-votes').innerText = `${totalVotes} (${(totalVotes > 0 ? 100 : 0)}%)`;
}
