@extends('layouts.app')

@section('title', 'CV Builder — CVNova.lk')

@section('content')
<div class="editor">
  <!-- FORM -->
  <div class="ed-form">
    <h2>CV Builder</h2>
    <p class="sub">Fill your details — preview updates live on the right.</p>

    <div class="form-sec">Personal Details</div>
    <div class="form-group"><label>Full Name <span class="req">*</span></label><input id="f-name" value="Tharindu Silva" placeholder="e.g. Tharindu Silva"></div>
    <div class="form-group"><label>Job Title <span class="req">*</span></label><input id="f-title" value="Senior Software Engineer" placeholder="e.g. Senior Software Engineer"></div>
    <div class="form-row">
      <div class="form-group"><label>Email</label><input id="f-email" value="tharindu.silva@email.com" placeholder="you@email.com"></div>
      <div class="form-group"><label>Phone</label><input id="f-phone" value="+94 77 123 4567" placeholder="+94 7X XXX XXXX"></div>
    </div>
    <div class="form-row">
      <div class="form-group"><label>Location</label><input id="f-location" value="Colombo, Sri Lanka" placeholder="City, Country"></div>
      <div class="form-group"><label>Website</label><input id="f-website" value="tharindusilva.dev" placeholder="yourwebsite.com"></div>
    </div>
    <div class="form-group"><label>Professional Summary</label><textarea id="f-summary">Results-driven software engineer with 7+ years of experience building scalable web applications. Proven track record of leading development teams, improving performance by 40% and delivering projects on time. Experienced in agile delivery, code reviews, automated testing and cloud infrastructure on AWS. Passionate about clean code, system design and mentoring junior developers.</textarea></div>

    <div class="form-sec">Skills <span style="font-weight:600;color:var(--muted);font-size:11px">(press Enter to add)</span></div>
    <div class="skill-tags" id="skillTags"></div>
    <div class="skill-input-row">
      <input id="f-skill" placeholder="Add a skill e.g. Laravel">
      <button class="btn btn-gold btn-sm" onclick="addSkill()">Add</button>
    </div>

    <div class="form-sec">Work Experience</div>
    <div id="expList"></div>
    <button class="add-btn" onclick="addExp()">+ Add Experience</button>

    <div class="form-sec">Education</div>
    <div id="eduList"></div>
    <button class="add-btn" onclick="addEdu()">+ Add Education</button>

    <div class="form-sec">Languages</div>
    <div id="langList"></div>
    <button class="add-btn" onclick="addLang()">+ Add Language</button>

    <div class="ed-actions">
      <button class="btn btn-gold" onclick="downloadPDF()">⬇ Download PDF</button>
      <button class="btn btn-ghost" onclick="resetForm()">Reset</button>
    </div>
  </div>

  <!-- PREVIEW -->
  <div class="ed-preview">
    <div class="pv-top">
      <h3>👁 Live Preview</h3>
      <div class="pv-tpls" id="pvTpls"></div>
      <div class="pv-controls">
        <span class="pv-fit" id="fitInd"></span>
        <select class="pv-zoom-select" id="pvZoom" onchange="zoomCv(this.value)">
          <option value="auto">Fit width</option>
          <option value="1">100%</option>
          <option value="0.8">80%</option>
          <option value="0.6">60%</option>
        </select>
      </div>
    </div>
    <div class="pv-zoom" id="cvZoomWrap"><div class="pv-page" id="cvPage"></div></div>
  </div>
</div>
@endsection

@push('scripts')
<script>
  /* template selected from URL (e.g. /editor/t4) */
  window.__initialTemplate = '{{ $selected }}';
  window.__templateIds = @json($templates);
</script>
@endpush
