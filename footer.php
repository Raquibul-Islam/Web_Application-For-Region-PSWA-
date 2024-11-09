<style>
footer {
    background-color: #004080; /* Footer background color */
    color: white; /* Default text color */
    text-align: center; /* Center text */
    padding: 20px; /* Padding inside the footer */
    position: relative; /* Positioning */
    bottom: 0; /* Position at the bottom */
    width: 100%; /* Full width */
}

footer .footer-content {
    margin-bottom: 15px; /* Space below footer content */
}

footer p {
    color: white; /* Ensure all paragraph text is white */
}

footer a {
    color: white; /* Link color */
    text-decoration: none; /* Remove underline */
    transition: color 0.3s; /* Smooth transition for hover effect */
}

footer a:hover {
    text-decoration: underline; /* Underline on hover */
    color: #66ccff; /* Change color on hover */
}

footer ul.social {
    list-style: none; /* Remove list bullets */
    padding: 0; /* Remove padding */
    display: flex; /* Flexbox for social icons */
    justify-content: center; /* Center icons */
    margin-top: 15px; /* Space above social links */
}

footer ul.social li {
    margin: 0 10px; /* Margin between social icons */
}

footer ul.social li a {
    color: white; /* Icon color */
    font-size: 20px; /* Font size for icons */
    text-decoration: none; /* Remove underline */
}

footer ul.social li a:hover {
    text-decoration: underline; /* Underline on hover */
}

/* Mobile responsive styles */
@media (max-width: 600px) {
    footer {
        padding: 15px; /* Less padding on small screens */
    }

    footer .footer-content p {
        font-size: 14px; /* Smaller text size for paragraphs */
    }

    footer ul.social li a {
        font-size: 18px; /* Smaller font size for social icons */
    }
}
</style>

<footer>
    <div class="footer-content">
        <p>&copy; 2024 <span style="color: white;">Pirojpur Students Welfare Association (PSWA)</span></p>
        <p>Email: <a href="mailto:pswa.contact@gmail.com">pswa.contact@gmail.com</a> | Phone: <a href="tel:+8801521549873">+88 01521-549873</a></p>
        
        <!-- Social Media Links -->
        <ul class="social">
            <li><a href="https://www.facebook.com/groups/412022395509355/" target="_blank">Facebook</a></li>
        </ul>
    </div>
</footer>
