<footer>
    <div class="container">
        <div class="footer-grid">
            <div>
                <h4>APEX Construction Consultants</h4>
                <p style="max-width:320px;">Independent, licensed construction consulting for owners, developers, and legal teams — from the first blueprint review to final expert report.</p>
            </div>
            <div>
                <h4>Services</h4>
                <ul>
                    <li><a href="{{ route('services') }}#pre-construction">Pre-Construction Planning</a></li>
                    <li><a href="{{ route('services') }}#on-site">On-Site Execution &amp; Oversight</a></li>
                    <li><a href="{{ route('services') }}#trade-consulting">Specialized Trade Consulting</a></li>
                </ul>
            </div>
            <div>
                <h4>Company</h4>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                    <li><a href="{{ route('contact') }}">Request a Consultation</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; {{ date('Y') }} Apex Construction Consultants. All rights reserved. Licensed &amp; insured.
        </div>
    </div>
</footer>
