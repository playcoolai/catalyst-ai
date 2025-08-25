console.log('Catalyst AI JavaScript is loaded.');

// Let's fetch data from our Python backend
fetch('http://127.0.0.1:8000/api/test')
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json();
    })
    .then(data => {
        console.log('Data from backend:', data);
        // We will display this on the page later
    })
    .catch(error => {
        console.error('Error fetching from backend:', error);
    });