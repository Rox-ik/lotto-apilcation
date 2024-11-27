
.then(data => {
    if (data.error) {
        document.getElementById('result').innerHTML = `<p style="color:red;">${data.error}</p>`;
        return;
    }

    form.addEventListener('submit', function(event) {
        event.preventDefault();
        document.getElementById('loader').style.display = 'block';
        document.getElementById('result').innerHTML = '';

document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Zapobiegaj domyślnemu wysłaniu formularza
        const formData = new FormData(form);
        fetch('process.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            document.getElementById('loader').style.display = 'none';
    
            if (data.error) {
                document.getElementById('result').innerHTML = `<p style="color:red;">${data.error}</p>`;
                return;
            }
            let output = `
                <p>Twoje liczby: ${data.userNumbers.join(', ')}</p>
                <p>Wylosowane liczby: ${data.randomNumbers.join(', ')}</p>
                <p>Trafiłeś ${data.numberOfMatches} liczb(y): ${data.matches.join(', ')}</p>
                <p>Twoja wygrana: ${data.prize}</p>
            `;
            document.getElementById('result').innerHTML = output;
        })
    })
    catch(error => {
        document.getElementById('loader').style.display = 'none';
        console.error('Błąd:', error);
    });
});

        
  