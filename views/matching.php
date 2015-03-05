<html>
    <head>
        <title>Cars</title>
    </head>
    <body>
        <h1>Here's what we've got!</h1>
        <p>{% for car in cars_matching %}</p>
        <p>Price: ${{ car.getPrice }} </p>
        <p>Model: {{ car.getModel }} </p>
        <p>{% endfor %}
    </body>
</html>
