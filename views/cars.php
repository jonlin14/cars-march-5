
<html>
    <head>
        <title>Car requests</title>
    </head>
    <body>
        <h1>What kind of car do you qualify for?</h1>
            <form action='/matching', 'matching' method='post'>
                <label for='price'>Enter your maximum price: </label>
                <input id='price' name='price' type='number'>

                <label for='miles'>Enter your preferred model of car: </label>
                <input id='miles' name='miles' type='number'>

                <button type='submit'>Find me a car!</button>
            </form>

    </body>
</html>
