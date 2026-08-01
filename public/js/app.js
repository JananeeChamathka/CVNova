/* ================= CVPro.lk — app.js ================= */

/* ================= SAMPLE DATA ================= */
const SAMPLE = {
  name:"Tharindu Silva", title:"Senior Software Engineer",
  email:"tharindu.silva@email.com", phone:"+94 77 123 4567",
  location:"Colombo, Sri Lanka", website:"tharindusilva.dev", linkedin:"linkedin.com/in/tharindusilva",
  summary:"Results-driven software engineer with 7+ years of experience building scalable web applications. Proven track record of leading development teams, improving performance by 40% and delivering projects on time. Experienced in agile delivery, code reviews, automated testing and cloud infrastructure on AWS. Passionate about clean code, system design and mentoring junior developers.",
  skills:["PHP","Laravel","JavaScript","Vue.js","MySQL","PostgreSQL","Docker","AWS","REST APIs","Git","Redis","CI/CD"],
  experience:[
    {position:"Senior Software Engineer",company:"TechNova Solutions",start:"2021",end:"Present",desc:"Leading a team of 5 engineers building a SaaS platform used by 50k+ users. Cut page load times by 40%, introduced CI/CD pipelines and mentored 3 junior developers."},
    {position:"Software Engineer",company:"Inforox (Pvt) Ltd",start:"2018",end:"2021",desc:"Developed REST APIs and admin dashboards in Laravel & Vue. Automated monthly reporting, saving 20+ hours of manual work per month and reducing errors by 30%."},
    {position:"Junior Developer",company:"WebSys Lanka",start:"2016",end:"2018",desc:"Built and maintained client websites with PHP and MySQL. Collaborated closely with designers to ship pixel-perfect, responsive pages for 15+ clients."}
  ],
  education:[
    {degree:"BSc (Hons) Computer Science",school:"University of Colombo",year:"2012 – 2016",desc:"Second Upper Class Honours. Specialized in Software Engineering & Distributed Systems."},
    {degree:"Higher Diploma in Information Technology",school:"SLIIT",year:"2010 – 2012",desc:"Completed with Distinction. Covering programming fundamentals, databases and networking."}
  ],
  languages:[{name:"Sinhala",level:"Native"},{name:"English",level:"Fluent"}]
};

const TEMPLATES = [
  {id:"t1", name:"Classic", tag:"ATS Friendly"},
  {id:"t2", name:"Modern", tag:"Popular"},
  {id:"t3", name:"Minimal", tag:"Clean"},
  {id:"t4", name:"Creative", tag:"Stand Out"},
  {id:"t5", name:"Elegant", tag:"Premium"}
];
let currentTpl = window.__initialTemplate || "t2";

/* ================= NAV ================= */
function toggleMenu(){var l=document.getElementById('navLinks');if(l)l.classList.toggle('open')}

/* ================= CV TEMPLATE RENDERERS ================= */
function esc(s){return (s||'').replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;')}

function contactLine(d){
  const parts=[];
  if(d.email) parts.push('✉ '+esc(d.email));
  if(d.phone) parts.push('☎ '+esc(d.phone));
  if(d.location) parts.push('📍 '+esc(d.location));
  if(d.website) parts.push('🌐 '+esc(d.website));
  if(d.linkedin) parts.push('in '+esc(d.linkedin));
  return parts.join('</span><span>');
}
function skillsHTML(d){return d.skills.map(s=>'<span class="cv-skill">'+esc(s)+'</span>').join('')}
function expHTML(d){
  return d.experience.map(e=>`
    <div class="exp-item">
      <div class="j">${esc(e.position)}</div>
      <div class="c">${esc(e.company)} <span class="d">${esc(e.start)} — ${esc(e.end)}</span></div>
      <p>${esc(e.desc)}</p>
    </div>`).join('');
}
function eduHTML(d){
  return d.education.map(e=>`
    <div class="exp-item">
      <div class="j">${esc(e.degree)}</div>
      <div class="c">${esc(e.school)} <span class="d">${esc(e.year)}</span></div>
      ${e.desc?'<p>'+esc(e.desc)+'</p>':''}
    </div>`).join('');
}

function tplClassic(d){return `
  <div class="cv t1">
    <div class="t1-head">
      <div class="cv-name">${esc(d.name)}</div>
      <div class="cv-title">${esc(d.title)}</div>
      <div class="cv-contact"><span>${contactLine(d)}</span></div>
    </div>
    <div class="cv-sec"><div class="cv-sec-h">Profile</div><p>${esc(d.summary)}</p></div>
    <div class="cv-sec"><div class="cv-sec-h">Experience</div><div class="exp">${expHTML(d)}</div></div>
    <div class="cv-sec"><div class="cv-sec-h">Education</div><div class="exp">${eduHTML(d)}</div></div>
    <div class="cv-sec"><div class="cv-sec-h">Skills</div><div>${skillsHTML(d)}</div></div>
  </div>`}

function tplModern(d){
  return `
  <div class="cv t2">
    <div class="side">
      <div class="avatar">${esc((d.name||'?').split(' ').map(w=>w[0]).slice(0,2).join('').toUpperCase())}</div>
      <h4>Contact</h4>
      <div class="cnt">
        <div>${esc(d.email||'')}</div><div>${esc(d.phone||'')}</div><div>${esc(d.location||'')}</div><div>${esc(d.website||'')}</div>
      </div>
      <h4>Skills</h4>
      ${d.skills.map((s,i)=>`<div style="font-size:11px;margin-top:6px">${esc(s)}</div><div class="bar"><i style="width:${85 - (i%3)*15}%"></i></div>`).join('')}
      <h4>Languages</h4>
      ${d.languages.map(l=>`<div style="font-size:11.5px;margin-bottom:4px">${esc(l.name)} — ${esc(l.level)}</div>`).join('')}
    </div>
    <div class="main">
      <div class="cv-name">${esc(d.name)}</div>
      <div class="cv-title">${esc(d.title)}</div>
      <div class="cv-sec"><div class="cv-sec-h">Profile</div><p>${esc(d.summary)}</p></div>
      <div class="cv-sec"><div class="cv-sec-h">Experience</div><div class="exp">${expHTML(d)}</div></div>
      <div class="cv-sec"><div class="cv-sec-h">Education</div><div class="exp">${eduHTML(d)}</div></div>
    </div>
  </div>`}

function tplMinimal(d){return `
  <div class="cv t3">
    <div class="cv-name">${esc(d.name)}</div>
    <div class="cv-title">${esc(d.title)}</div>
    <div class="cv-contact"><span>${contactLine(d)}</span></div>
    <div class="cv-sec"><div class="cv-sec-h">Profile</div><p>${esc(d.summary)}</p></div>
    <div class="cv-sec"><div class="cv-sec-h">Experience</div><div class="exp">${expHTML(d)}</div></div>
    <div class="cv-sec"><div class="cv-sec-h">Education</div><div class="exp">${eduHTML(d)}</div></div>
    <div class="cv-sec"><div class="cv-sec-h">Skills</div><div>${skillsHTML(d)}</div></div>
  </div>`}

function tplCreative(d){return `
  <div class="cv t4">
    <div class="t4-band">
      <div class="cv-name">${esc(d.name)}</div>
      <div class="cv-title">${esc(d.title)}</div>
      <div class="cv-contact"><span>${contactLine(d)}</span></div>
    </div>
    <div class="t4-body">
      <div class="t4-left">
        <div class="cv-sec"><div class="cv-sec-h">Profile</div><p>${esc(d.summary)}</p></div>
        <div class="cv-sec"><div class="cv-sec-h">Experience</div><div class="exp">${expHTML(d)}</div></div>
        <div class="cv-sec"><div class="cv-sec-h">Education</div><div class="exp">${eduHTML(d)}</div></div>
      </div>
      <div class="t4-right">
        <h4>Skills</h4><div>${skillsHTML(d)}</div>
        <h4>Languages</h4>
        ${d.languages.map(l=>`<div style="font-size:12px;margin-bottom:4px">${esc(l.name)} — ${esc(l.level)}</div>`).join('')}
      </div>
    </div>
  </div>`}

function tplElegant(d){
  const ini=esc((d.name||'?').split(' ').map(w=>w[0]).slice(0,2).join(''));
  return `
  <div class="cv t5">
    <div class="mono">${ini}</div>
    <div class="cv-name">${esc(d.name)}</div>
    <div class="cv-title">${esc(d.title)}</div>
    <div class="t5-rule"></div>
    <div class="cv-contact"><span>${contactLine(d)}</span></div>
    <div class="cv-sec"><div class="cv-sec-h">Profile</div><p style="max-width:520px;margin:0 auto">${esc(d.summary)}</p></div>
    <div class="cv-sec"><div class="cv-sec-h">Experience</div><div class="exp">${expHTML(d)}</div></div>
    <div class="cv-sec"><div class="cv-sec-h">Education</div><div class="exp">${eduHTML(d)}</div></div>
    <div class="cv-sec"><div class="cv-sec-h">Skills</div><div>${skillsHTML(d)}</div></div>
  </div>`}

const RENDERERS={t1:tplClassic,t2:tplModern,t3:tplMinimal,t4:tplCreative,t5:tplElegant};

/* ================= EDITOR STATE ================= */
function collect(){
  return {
    name:g('f-name'),title:g('f-title'),email:g('f-email'),phone:g('f-phone'),
    location:g('f-location'),website:g('f-website'),summary:g('f-summary'),
    skills:[...document.querySelectorAll('#skillTags .skill-tag')].map(t=>t.dataset.s),
    experience:[...document.querySelectorAll('#expList .rep')].map(r=>({
      position:r.querySelector('.e-pos').value,company:r.querySelector('.e-com').value,
      start:r.querySelector('.e-st').value,end:r.querySelector('.e-en').value,desc:r.querySelector('.e-de').value})),
    education:[...document.querySelectorAll('#eduList .rep')].map(r=>({
      degree:r.querySelector('.d-deg').value,school:r.querySelector('.d-sch').value,
      year:r.querySelector('.d-yr').value,desc:r.querySelector('.d-de').value})),
    languages:[...document.querySelectorAll('#langList .rep')].map(r=>({
      name:r.querySelector('.l-na').value,level:r.querySelector('.l-le').value}))
  };
}
function g(id){var el=document.getElementById(id);return el?el.value.trim():''}

function render(){
  const page=document.getElementById('cvPage');
  if(!page)return;
  const d=collect();
  if(!d.name&&!d.title){page.innerHTML='<div class="empty-cv">👈 Fill in your details on the left to see your CV here</div>';setTimeout(checkFit,60);return;}
  page.innerHTML=RENDERERS[currentTpl](d);
  setTimeout(checkFit,60);
}

/* ================= A4 FIT CHECK + ZOOM ================= */
function checkFit(){
  const page=document.getElementById('cvPage');
  const ind=document.getElementById('fitInd');
  if(!page||!ind)return;
  const h=page.scrollHeight;
  if(h<=1123){ind.textContent='✓ Fits A4 · 1 page';ind.className='pv-fit fit-ok';}
  else{ind.textContent='⚠ '+Math.ceil(h/1123)+' pages — trim content';ind.className='pv-fit fit-warn';}
}
function zoomCv(v){
  const wrap=document.getElementById('cvZoomWrap');
  if(!wrap)return;
  if(v==='auto'){
    const cont=document.querySelector('.ed-preview');
    const w=(cont?cont.clientWidth:800)-64;
    wrap.style.zoom=Math.min(1,(w/794).toFixed(3));
  }else wrap.style.zoom=v;
}

/* ================= SKILLS ================= */
function skillTagHTML(s){return '<span class="skill-tag" data-s="'+esc(s)+'">'+esc(s)+'<button onclick="removeSkill(this)">×</button></span>'}
function addSkill(){
  const i=document.getElementById('f-skill');
  if(!i)return;
  const v=i.value.trim();
  if(!v)return;
  if(![...document.querySelectorAll('#skillTags .skill-tag')].some(t=>t.dataset.s===v))
    document.getElementById('skillTags').insertAdjacentHTML('beforeend',skillTagHTML(v));
  i.value='';
  render();
}
function removeSkill(b){b.closest('.skill-tag').remove();render()}
(function(){var i=document.getElementById('f-skill');if(i)i.addEventListener('keydown',function(e){if(e.key==='Enter'){e.preventDefault();addSkill();render()}})})();

/* ================= REPEATABLE SECTIONS ================= */
function addExp(e){
  const x=e||{position:'',company:'',start:'',end:'',desc:''};
  const el=document.createElement('div');el.className='rep';
  el.innerHTML=`
    <button class="del" onclick="this.closest('.rep').remove();render()">×</button>
    <div class="form-group"><label>Position</label><input class="e-pos" value="${esc(x.position)}" placeholder="e.g. Software Engineer"></div>
    <div class="form-group"><label>Company</label><input class="e-com" value="${esc(x.company)}" placeholder="e.g. TechNova Solutions"></div>
    <div class="form-row"><div class="form-group"><label>Start</label><input class="e-st" value="${esc(x.start)}" placeholder="2018"></div>
    <div class="form-group"><label>End</label><input class="e-en" value="${esc(x.end)}" placeholder="2021 / Present"></div></div>
    <div class="form-group"><label>Description</label><textarea class="e-de" placeholder="Key achievements...">${esc(x.desc)}</textarea></div>`;
  document.getElementById('expList').appendChild(el);
}
function addEdu(x){
  x=x||{degree:'',school:'',year:'',desc:''};
  const el=document.createElement('div');el.className='rep';
  el.innerHTML=`
    <button class="del" onclick="this.closest('.rep').remove();render()">×</button>
    <div class="form-group"><label>Degree / Qualification</label><input class="d-deg" value="${esc(x.degree)}" placeholder="e.g. BSc (Hons) Computer Science"></div>
    <div class="form-group"><label>School / University</label><input class="d-sch" value="${esc(x.school)}" placeholder="e.g. University of Colombo"></div>
    <div class="form-group"><label>Year</label><input class="d-yr" value="${esc(x.year)}" placeholder="2012 – 2016"></div>
    <div class="form-group"><label>Details</label><textarea class="d-de" placeholder="Grade, specialisation...">${esc(x.desc)}</textarea></div>`;
  document.getElementById('eduList').appendChild(el);
}
function addLang(x){
  x=x||{name:'',level:''};
  const el=document.createElement('div');el.className='rep';
  el.innerHTML=`
    <button class="del" onclick="this.closest('.rep').remove();render()">×</button>
    <div class="form-row">
      <div class="form-group"><label>Language</label><input class="l-na" value="${esc(x.name)}" placeholder="e.g. Sinhala"></div>
      <div class="form-group"><label>Level</label><input class="l-le" value="${esc(x.level)}" placeholder="e.g. Native / Fluent"></div>
    </div>`;
  document.getElementById('langList').appendChild(el);
}

/* ================= TEMPLATE PICKER ================= */
function buildTplPicker(){
  const wrap=document.getElementById('pvTpls');
  if(!wrap)return;
  wrap.innerHTML=TEMPLATES.map(t=>'<button class="pv-tpl'+(t.id===currentTpl?' active':'')+'" onclick="selectTpl(\''+t.id+'\')">'+t.name+'</button>').join('');
}
function selectTpl(id){currentTpl=id;buildTplPicker();render()}

/* ================= CARD PREVIEWS (scaled) ================= */
function tplShot(t){
  return '<div class="tpl-shot"><div class="scale" style="width:420px;transform:scale('+(420/430)+')"><div style="width:420px;min-height:520px">'+RENDERERS[t.id](SAMPLE)+'</div></div></div>';
}
function tplCard(t,big){
  return '<div class="tpl-card'+(big?' big':'')+'">'
    +'<a href="'+ (window.__editorUrl||'/editor') +'/'+t.id+'" title="Use '+t.name+' template">'+tplShot(t)+'</a>'
    +'<div class="tpl-meta"><div class="t-name">'+t.name+'</div><div class="t-tag">'+t.tag+'</div>'
    +'<a href="'+(window.__editorUrl||'/editor')+'/'+t.id+'" class="use">Use template →</a></div></div>';
}
function buildGrids(){
  const g1=document.getElementById('tplGrid');
  if(g1)g1.innerHTML=TEMPLATES.slice(0,3).map(t=>tplCard(t)).join('');
  const g2=document.getElementById('tplGridAll');
  if(g2)g2.innerHTML=TEMPLATES.map(t=>tplCard(t,true)).join('');
}

/* ================= INIT ================= */
(function init(){
  if(document.getElementById('skillTags'))SAMPLE.skills.forEach(s=>document.getElementById('skillTags').insertAdjacentHTML('beforeend',skillTagHTML(s)));
  if(document.getElementById('expList'))SAMPLE.experience.forEach(addExp);
  if(document.getElementById('eduList'))SAMPLE.education.forEach(addEdu);
  if(document.getElementById('langList'))SAMPLE.languages.forEach(addLang);
  document.addEventListener('input',function(e){if(e.target.closest('.ed-form'))render()});
  buildTplPicker();buildGrids();render();
  zoomCv('auto');
  window.addEventListener('resize',function(){var z=document.getElementById('pvZoom');if(z&&z.value==='auto')zoomCv('auto')});
})();

function downloadPDF(){const p=document.querySelector('.pv-page');if(!p)return;p.classList.add('print-zone');window.print();setTimeout(function(){p.classList.remove('print-zone')},500)}
function resetForm(){
  if(!confirm('Reset all fields to sample data?'))return;
  var map={'f-name':'name','f-title':'title','f-email':'email','f-phone':'phone','f-location':'location','f-website':'website','f-summary':'summary'};
  Object.keys(map).forEach(function(id){document.getElementById(id).value=SAMPLE[map[id]]||''});
  document.getElementById('skillTags').innerHTML='';SAMPLE.skills.forEach(s=>document.getElementById('skillTags').insertAdjacentHTML('beforeend',skillTagHTML(s)));
  document.getElementById('expList').innerHTML='';SAMPLE.experience.forEach(addExp);
  document.getElementById('eduList').innerHTML='';SAMPLE.education.forEach(addEdu);
  document.getElementById('langList').innerHTML='';SAMPLE.languages.forEach(addLang);
  render();
}
