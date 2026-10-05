@extends('layouts.app')

@section('title', 'Contact & Request a Consultation')
@section('meta_description', 'Request a consultation with an Apex construction specialist. Tell us about your project and we will respond within one business day.')

@section('content')

<section style="padding-top:56px;">
    <div class="container">
        <div class="section-tag">Get Started</div>
        <h1 class="section-heading" style="font-size:36px;">Tell Us About Your Project</h1>
        <p class="section-sub" style="margin-bottom:40px;">
            Whether you need a blueprint reviewed, a jobsite inspected, or an expert report for a
            dispute, the details below let us match you with the right consultant fast.
        </p>

        <div class="contact-layout">

            <div class="contact-side">
                <h2>Talk to a Specialist</h2>
                <p style="color:var(--gray-600); margin-bottom:28px;">
                    We respond to every inquiry within one business day. For active safety issues
                    or urgent jobsite matters, call us directly.
                </p>

                <div class="contact-info-item">
                    <div class="icon-dot">P</div>
                    <div>
                        <strong>(555) 018-2249</strong>
                        <span>Mon–Fri, 7:00 AM–6:00 PM</span>
                    </div>
                </div>
                <div class="contact-info-item">
                    <div class="icon-dot">E</div>
                    <div>
                        <strong>projects@apexconstructionconsultants.com</strong>
                        <span>For document review requests, attach files after we reply</span>
                    </div>
                </div>
                <div class="contact-info-item">
                    <div class="icon-dot">L</div>
                    <div>
                        <strong>Regional &amp; Nationwide</strong>
                        <span>On-site visits available; remote document review anywhere</span>
                    </div>
                </div>

                <ul class="reassurance-list">
                    <li>No obligation — initial scoping call is free</li>
                    <li>Licensed, independent, and confidential</li>
                    <li>We never share your project details with contractors</li>
                    <li>Responses within one business day, guaranteed</li>
                </ul>
            </div>

            <div>
                <div class="lead-form">

                    @if (session('status'))
                        <div class="status-banner">{{ session('status') }}</div>
                    @endif

                    <form method="POST" action="{{ route('contact.store') }}">
                        @csrf

                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Full Name *</label>
                                <input type="text" id="name" name="name" value="{{ old('name') }}" required>
                                @error('name') <div class="error-text">{{ $message }}</div> @enderror
                            </div>
                            <div class="form-group">
                                <label for="company">Company (optional)</label>
                                <input type="text" id="company" name="company" value="{{ old('company') }}">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                                @error('email') <div class="error-text">{{ $message }}</div> @enderror
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone *</label>
                                <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" required>
                                @error('phone') <div class="error-text">{{ $message }}</div> @enderror
                            </div>
                        </div>

                        <div class="form-group full">
                            <label for="project_type">What do you need help with? *</label>
                            <select id="project_type" name="project_type" required>
                                <option value="" disabled {{ old('project_type') ? '' : 'selected' }}>Select a service</option>
                                <option value="pre_construction" {{ old('project_type') === 'pre_construction' ? 'selected' : '' }}>Pre-Construction Planning (blueprint / budget review)</option>
                                <option value="on_site_oversight" {{ old('project_type') === 'on_site_oversight' ? 'selected' : '' }}>On-Site Execution &amp; Oversight (code, safety, quality)</option>
                                <option value="trade_consulting" {{ old('project_type') === 'trade_consulting' ? 'selected' : '' }}>Specialized Trade Consulting (advisory)</option>
                                <option value="dispute_resolution" {{ old('project_type') === 'dispute_resolution' ? 'selected' : '' }}>Dispute Resolution / Expert Report</option>
                                <option value="not_sure" {{ old('project_type') === 'not_sure' ? 'selected' : '' }}>Not sure yet</option>
                            </select>
                            @error('project_type') <div class="error-text">{{ $message }}</div> @enderror
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="project_location">Project Location *</label>
                                <input type="text" id="project_location" name="project_location" value="{{ old('project_location') }}" placeholder="City, State" required>
                                @error('project_location') <div class="error-text">{{ $message }}</div> @enderror
                            </div>
                            <div class="form-group">
                                <label for="budget_range">Estimated Project Budget *</label>
                                <select id="budget_range" name="budget_range" required>
                                    <option value="" disabled {{ old('budget_range') ? '' : 'selected' }}>Select a range</option>
                                    <option value="under_100k" {{ old('budget_range') === 'under_100k' ? 'selected' : '' }}>Under $100K</option>
                                    <option value="100k_500k" {{ old('budget_range') === '100k_500k' ? 'selected' : '' }}>$100K – $500K</option>
                                    <option value="500k_2m" {{ old('budget_range') === '500k_2m' ? 'selected' : '' }}>$500K – $2M</option>
                                    <option value="2m_10m" {{ old('budget_range') === '2m_10m' ? 'selected' : '' }}>$2M – $10M</option>
                                    <option value="over_10m" {{ old('budget_range') === 'over_10m' ? 'selected' : '' }}>Over $10M</option>
                                </select>
                                @error('budget_range') <div class="error-text">{{ $message }}</div> @enderror
                            </div>
                        </div>

                        <div class="form-group full">
                            <label for="timeline">When do you need this started? *</label>
                            <select id="timeline" name="timeline" required>
                                <option value="" disabled {{ old('timeline') ? '' : 'selected' }}>Select a timeline</option>
                                <option value="immediately" {{ old('timeline') === 'immediately' ? 'selected' : '' }}>Immediately — active issue on site</option>
                                <option value="1_3_months" {{ old('timeline') === '1_3_months' ? 'selected' : '' }}>Within 1–3 months</option>
                                <option value="3_6_months" {{ old('timeline') === '3_6_months' ? 'selected' : '' }}>Within 3–6 months</option>
                                <option value="planning_stage" {{ old('timeline') === 'planning_stage' ? 'selected' : '' }}>Still in planning</option>
                            </select>
                            @error('timeline') <div class="error-text">{{ $message }}</div> @enderror
                        </div>

                        <div class="form-group full">
                            <label for="message">Project Details (optional)</label>
                            <textarea id="message" name="message" placeholder="Tell us about the property, current phase, or specific concerns.">{{ old('message') }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary" style="width:100%;">Request My Consultation</button>
                        <p class="submit-note">By submitting, you agree to be contacted about your project. We never sell or share your information.</p>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
