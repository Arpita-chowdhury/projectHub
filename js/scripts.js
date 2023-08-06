function openSigninPage(year) {
    switch (year) {
        case '3rd_year':
            window.location.href = 'signin.html';
            break;
        case '4th_year':
            window.location.href = 'signin.html';
            break;
        default:
            alert('Invalid option.');
    }
}



function handleSignIn(event) {
    event.preventDefault();
    // Implement logic to handle the sign-in form submission.
    alert('Sign In form submission will be handled later.');
    return false;
}

function handleLogin(event) {
    event.preventDefault();
    // Implement logic to handle the login form submission.
    alert('Login form submission will be handled later.');
    return false;
}







function openGroupRegistration() {
    window.location.href = 'group_registration.html';
}

function openProposalSubmission() {
    window.location.href = 'proposal_submission.html';
}

function openSupervisorInteraction() {
    // Implement logic to handle the Supervisor Interaction button.
    alert('Supervisor Interaction feature will be implemented later.');
}

function openFeedback() {
    // Implement logic to handle the Feedback button.
    alert('Feedback feature will be implemented later.');
}

function openPreviousProjects() {
    window.location.href = 'previous_projects.html';
}

function openProjects() {
    // Implement logic to handle the Projects button.
    alert('Projects feature will be implemented later.');
}

function openUploadProject() {
    window.location.href = 'upload_project.html';
}

function submitProposal(event) {
    event.preventDefault();
    // Implement logic to handle the proposal submission form submission.
    alert('Proposal submission form will be handled later.');
    return false;
}

function handleUpload(event) {
    event.preventDefault();
    // Implement logic to handle the upload project form submission.
    alert('Upload project form will be handled later.');
    return false;
}
