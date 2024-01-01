# Family-Gift-Watch

<h1>Abstract:</h1>
<p>LAMP stack program to manage and display gifts purchased for individuals while preventing individuals from viewing gifts for them.</p>
<h1>Functionality:</h1>
<ul>
    <li>Users can register for an account or login</li>
    <li>Once logged in, users can navigate a home page listing upcoming celebrations and recent gift additions</li>
</ul>
<h1>How to install and run using LAMP stack</h1>
<ul>
    <li>Install Apache</li>
        <ul>
            <li>Run command: sudo apt install apache2 -y</li>
        </ul>
    <li>Allow HTTP/HTTPS traffic to server</li>
        <ul>
            <li>Run command: sudo ufw allow "Apache Full"</li>
        </ul>
    <li>Install MySQL</li>
        <ul>
            <li>Run command: sudo apt install mysql-server -y</li>
        </ul>
    <li>Install PHP</li>
        <ul>
            <li>Run command: sudo apt install php libapache2-mod-php php-mysql -y</li>
        </ul>
    <li>Configure project files under /var/www/html. Create index.html page in directory to store home page</li>
</ul>