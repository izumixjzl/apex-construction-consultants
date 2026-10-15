@extends('layouts.app')

@section('title', 'Construction Consulting')
@section('meta_description', 'From blueprint review to final expert report — independent construction consulting across pre-construction planning, on-site oversight, and specialized trade consulting.')

@section('content')

<section class="hero">
    <div class="container">
        <div class="eyebrow">Independent Construction Consulting</div>
        <h1>Every Build Has Three Points of Failure. We Cover All Three.</h1>
        <p class="lead">
            Budgets blow up before the first shovel hits the ground. Code violations and safety
            gaps surface mid-build. Disputes drag on for months without a technical expert in the
            room. Apex puts a licensed construction specialist on your side at every phase — so
            small problems never become six-figure ones.
        </p>
        <div class="hero-actions">
            <a href="{{ route('contact') }}" class="btn btn-primary">Request a Consultation</a>
            <a href="{{ route('services') }}" class="btn btn-outline">View Our Services</a>
        </div>
    </div>
</section>

<div class="trust-strip">
    <div class="container">
        <div class="trust-grid">
            <div>
                <div class="stat-number">18+</div>
                <div class="stat-label">Years in the Field</div>
            </div>
            <div>
                <div class="stat-number">400+</div>
                <div class="stat-label">Projects Reviewed</div>
            </div>
            <div>
                <div class="stat-number">$1.2B</div>
                <div class="stat-label">Construction Value Overseen</div>
            </div>
            <div>
                <div class="stat-number">100%</div>
                <div class="stat-label">Independent — No Contractor Ties</div>
            </div>
        </div>
    </div>
</div>

<section>
    <div class="container">
        <div class="section-tag">How We Work</div>
        <h2 class="section-heading">One Consultant, Three Phases of Protection</h2>
        <p class="section-sub">
            Most firms specialize in one lane. We built Apex to follow a project through its
            entire lifecycle — planning, execution, and resolution — so nothing falls through
            the cracks between contractors, architects, and legal teams.
        </p>

        <div class="phase-grid">
            <div class="phase-card">
                <img src="{{ asset('images/phase-planning.jpg') }}" alt="Consultant reviewing construction blueprints" class="phase-image" loading="lazy">
                <div class="phase-number">1</div>
                <h3>Pre-Construction Planning</h3>
                <p>We catch the errors that cost the most before a single dollar is committed.</p>
                <ul>
                    <li>Blueprint &amp; constructability review</li>
                    <li>Budget estimation &amp; cost validation</li>
                    <li>Scope and bid-package auditing</li>
                </ul>
            </div>
            <div class="phase-card">
                <img src="{{ asset('images/phase-oversight.jpg') }}" alt="Crew working on rebar at an active jobsite" class="phase-image" loading="lazy">
                <div class="phase-number">2</div>
                <h3>On-Site Execution &amp; Oversight</h3>
                <p>Boots-on-the-ground oversight that keeps crews accountable and inspectors satisfied.</p>
                <ul>
                    <li>Building &amp; safety code compliance</li>
                    <li>Jobsite safety risk mitigation</li>
                    <li>Quality control &amp; milestone checks</li>
                </ul>
            </div>
            <div class="phase-card">
                <img src="{{ asset('images/phase-trade.jpg') }}" alt="Electrician inspecting a wiring panel" class="phase-image" loading="lazy">
                <div class="phase-number">3</div>
                <h3>Specialized Trade Consulting</h3>
                <p>Technical expertise when a project's outcome depends on getting the facts right.</p>
                <ul>
                    <li>Construction dispute resolution</li>
                    <li>Expert witness &amp; forensic reporting</li>
                    <li>Trade-specific technical advisory</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section style="background: var(--off-white);">
    <div class="container">
        <div class="section-tag">Why Owners Hire Us</div>
        <h2 class="section-heading">Because the Most Expensive Mistakes Are the Ones You Don't See Coming</h2>
        <p class="section-sub">
            We work exclusively for owners, developers, attorneys, and lenders — never for the
            contractors we're evaluating. That independence is the whole point.
        </p>
        <div class="phase-grid">
            <div class="phase-card">
                <h3>No Conflicts of Interest</h3>
                <p>We don't build, and we don't take referral fees from contractors. Our only client is you.</p>
            </div>
            <div class="phase-card">
                <h3>Licensed &amp; Court-Tested</h3>
                <p>Our consultants hold active trade licenses and have testified as expert witnesses in construction litigation.</p>
            </div>
            <div class="phase-card">
                <h3>Documentation That Holds Up</h3>
                <p>Every review, inspection, and report is written to a standard that survives legal and insurance scrutiny.</p>
            </div>
        </div>
    </div>
</section>

<div class="cta-band">
    <div class="container">
        <h2>Get a Second Set of Expert Eyes on Your Project</h2>
        <p>Tell us where you are in the build — planning, mid-construction, or in dispute — and we'll tell you exactly how we can help within one business day.</p>
        <a href="{{ route('contact') }}" class="btn btn-primary">Request a Consultation</a>
    </div>
</div>

@endsection
