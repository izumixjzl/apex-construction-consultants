@extends('layouts.app')

@section('title', 'Services')
@section('meta_description', 'Pre-construction planning, on-site execution oversight, and specialized trade consulting — explained phase by phase.')

@section('content')

<section class="hero" style="padding: 64px 0 56px;">
    <div class="container">
        <div class="eyebrow">Our Services</div>
        <h1 style="font-size:38px;">Consulting Built Around the Construction Lifecycle</h1>
        <p class="lead" style="margin-bottom:0;">
            We organize every engagement into three phases. Hire us for one, or bring us in from
            the first blueprint through the final report.
        </p>
    </div>
</section>

<section style="padding-bottom: 0;">
    <div class="container">

        <div class="service-phase" id="pre-construction">
            <div class="service-phase-label">
                <div class="phase-number">1</div>
                <h2>Pre-Construction Planning</h2>
                <p class="phase-tagline">Get the numbers and the drawings right before you break ground.</p>
            </div>
            <div>
                <p>
                    The most expensive mistakes on any project are made before construction even
                    starts — in a blueprint that doesn't account for site conditions, or a budget
                    built on optimistic assumptions. Our pre-construction phase exists to pressure-test
                    both before you're financially committed.
                </p>
                <div class="deliverables-grid">
                    <div class="deliverable">
                        <h4>Blueprint &amp; Constructability Review</h4>
                        <p>Line-by-line review of architectural and engineering drawings to flag conflicts, code gaps, and buildability issues before they reach the field.</p>
                    </div>
                    <div class="deliverable">
                        <h4>Budget Estimation &amp; Cost Validation</h4>
                        <p>Independent cost estimates benchmarked against current material and labor markets, so you know if a contractor's bid is realistic.</p>
                    </div>
                    <div class="deliverable">
                        <h4>Scope &amp; Bid-Package Auditing</h4>
                        <p>We compare bid packages side by side to catch scope gaps, exclusions, and allowances that cause change orders later.</p>
                    </div>
                    <div class="deliverable">
                        <h4>Site &amp; Feasibility Assessment</h4>
                        <p>Evaluation of site conditions, zoning constraints, and permitting requirements that could affect timeline or cost.</p>
                    </div>
                    <div class="deliverable">
                        <h4>Value Engineering Recommendations</h4>
                        <p>Targeted suggestions to reduce cost or schedule risk without compromising structural or design intent.</p>
                    </div>
                    <div class="deliverable">
                        <h4>Contractor &amp; Vendor Vetting</h4>
                        <p>Background, licensing, and past-performance checks on contractors before you sign a contract.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="service-phase" id="on-site">
            <div class="service-phase-label">
                <div class="phase-number">2</div>
                <h2>On-Site Execution &amp; Oversight</h2>
                <p class="phase-tagline">Independent eyes on the jobsite from groundbreaking to final walkthrough.</p>
            </div>
            <div>
                <p>
                    Once construction begins, plans meet reality — and reality doesn't always
                    follow the drawings. Our on-site consultants act as your dedicated set of
                    eyes, holding the build to code, safety, and quality standards regardless of
                    schedule pressure from the general contractor.
                </p>
                <div class="deliverables-grid">
                    <div class="deliverable">
                        <h4>Building &amp; Safety Code Compliance</h4>
                        <p>Ongoing checks against local, state, and OSHA-equivalent code requirements, with issues documented and escalated before inspection day.</p>
                    </div>
                    <div class="deliverable">
                        <h4>Jobsite Safety Risk Mitigation</h4>
                        <p>Proactive identification of hazards — fall risks, structural loading, equipment operation — with corrective action plans.</p>
                    </div>
                    <div class="deliverable">
                        <h4>Quality Control &amp; Milestone Checks</h4>
                        <p>Scheduled inspections at each construction milestone to confirm work matches approved plans and materials specifications.</p>
                    </div>
                    <div class="deliverable">
                        <h4>Change Order Review</h4>
                        <p>Independent evaluation of proposed change orders to confirm the cost and scope are justified before you approve payment.</p>
                    </div>
                    <div class="deliverable">
                        <h4>Progress &amp; Payment Verification</h4>
                        <p>Site-verified progress reports to support draw requests, so you only pay for work actually completed.</p>
                    </div>
                    <div class="deliverable">
                        <h4>Punch List &amp; Closeout Management</h4>
                        <p>Final walkthrough documentation and punch-list tracking through to project closeout.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="service-phase" id="trade-consulting">
            <div class="service-phase-label">
                <div class="phase-number">3</div>
                <h2>Specialized Trade Consulting</h2>
                <p class="phase-tagline">Technical authority when the stakes involve liability, litigation, or insurance.</p>
            </div>
            <div>
                <p>
                    When a project moves into disagreement — over defects, delays, or damages —
                    the facts need a technical authority behind them. This phase supports owners,
                    attorneys, and insurers who need construction expertise that holds up under
                    scrutiny.
                </p>
                <div class="deliverables-grid">
                    <div class="deliverable">
                        <h4>Construction Dispute Resolution</h4>
                        <p>Technical analysis of defect claims, delay claims, and contract disputes to support mediation, arbitration, or negotiation.</p>
                    </div>
                    <div class="deliverable">
                        <h4>Expert Witness &amp; Forensic Reporting</h4>
                        <p>Court-ready expert reports and testimony grounded in site investigation, documentation review, and industry standards.</p>
                    </div>
                    <div class="deliverable">
                        <h4>Defect &amp; Failure Investigation</h4>
                        <p>Root-cause analysis of structural, water-intrusion, or systems failures, with findings documented for insurance or legal use.</p>
                    </div>
                    <div class="deliverable">
                        <h4>Trade-Specific Technical Advisory</h4>
                        <p>Specialized guidance across structural, mechanical, electrical, and civil trades for complex or nonstandard conditions.</p>
                    </div>
                    <div class="deliverable">
                        <h4>Insurance Claim Support</h4>
                        <p>Independent damage assessments and cost-to-repair documentation to support property or builder's-risk claims.</p>
                    </div>
                    <div class="deliverable">
                        <h4>Second-Opinion Reviews</h4>
                        <p>Independent review of another party's findings, estimate, or report before you rely on it.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<div class="cta-band">
    <div class="container">
        <h2>Not Sure Which Phase Applies to You?</h2>
        <p>Most projects need more than one. Tell us where things stand and we'll recommend the right scope of work.</p>
        <a href="{{ route('contact') }}" class="btn btn-primary">Request a Consultation</a>
    </div>
</div>

@endsection
