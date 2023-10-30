

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <div id="radio">
            <script>
                const axios = require('axios');
                
                const options =
                {
                    method: 'GET',
                    url: 'https://deezerdevs-deezer.p.rapidapi.com/infos',
                    headers: {'X-RapidAPI-Key': 'c5ff962d00msh45a837601fad0dbp1ca058jsne79fda541215','X-RapidAPI-Host': 'deezerdevs-deezer.p.rapidapi.com'}
            };

            try {
	            const response = await axios.request(options);
	            console.log(response.data);
                } catch (error) {console.error(error);}



            
        </script>
    </div>
    
</body>
</html>
                    

