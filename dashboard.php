<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
    <div id="dashboard">
        
        <aside class="sidebar">
            <div class="sidebar-logo">
                <i class="fas fa-plus-circle"></i> </div> <div class="sidebar-search">
 
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Search">
            </div>
            <nav class="sidebar-nav">
                <a href="#" class="sidebar-item active" title="Dashboard"><i class="fas fa-home"></i> <span>Dashboard</span></a>
                <a href="#" class="sidebar-item" title="Appointments"><i class="fas fa-calendar-alt"></i> <span>Appointments</span></a>
                <a href="#" class="sidebar-item" title="Reports & Tests"><i class="fas fa-file-medical-alt"></i> <span>Doctor</span></a>
                <a href="#" class="sidebar-item" title="Medication"><i class="fas fa-pills"></i> <span>Reports & Tests</span></a>
                <a href="#" class="sidebar-item" title="Settings"><i class="fas fa-cog"></i> <span>Help</span></a>
            </nav>
            
            <div class="sidebar-footer">
                <a href="#" class="sidebar-item sign-out" title="Sign Out">
                    <i class="fas fa-sign-out-alt"></i> <span>Sign Out</span>
                </a>
            </div>
            </aside>

        <main class="main-content">
        <header class="main-header">
            <div class="header-left">
                <span class="breadcrumbs">Home / My Dashboard</span>
                <h1 id="greeting">Good Afternoon</h1>
                <p class="date" id="currentDate">Loading date...</p>
            </div>
            <a href="Add_logs.php" class="add-quick-logs-button">
                <i class="fas fa-plus"></i> Add Quick Logs
            </a>
        </header>

            <section class="dashboard-grid">
                
            <div class="patient-overview-panel" id="patientOverview">
    <div class="patient-card">
        <!-- HEADER -->
        <div class="patient-header">
            <img src="assets/profile.jpg" alt="Patient Photo" class="patient-avatar" id="patientAvatar">
            <div class="header-info">  
                <div>
                    <h3 class="header-name" id="patientName">Loading...</h3>
                    <p class="header-details">
                        <span id="patientEmail">Loading...</span>
                        <span class="ml-2 px-2 py-0.5 rounded-full text-xs font-bold secured-badge">SECURED</span>
                    </p>
                </div>
            </div>
        </div>

        <!-- DATA GRID SECTION -->
        <div class="data-grid">
            <div class="data-item">
                <span class="data-label">Date of Birth</span>
                <span class="data-value" id="patientDob">Loading...</span>
            </div>
            <div class="data-item">
                <span class="data-label">Gender</span>
                <span class="data-value" id="patientGender">Loading...</span>
            </div>
            <div class="data-item">
                <span class="data-label">Primary Condition</span>
                <span class="data-value primary-condition" id="patientPrimaryCondition">Loading...</span>
            </div>
            <div class="data-item">
                <span class="data-label">Diagnosis Date</span>
                <span class="data-value diagnosis-date" id="patientDiagnosisDate">Loading...</span>
            </div>
        </div>

        <!-- ALERTS / ALLERGIES -->
        <div class="list-section">
            <h4 class="list-header alerts">ALLERGIES</h4>
            <div class="tag-list" id="patientAllergies">
                <!-- Dynamically added tags here -->
            </div>
        </div>

        <!-- ADDITIONAL CONDITIONS -->
        <div class="list-section">
            <h4 class="list-header">ADDITIONAL CONDITIONS</h4>
            <div class="tag-list" id="patientAdditionalConditions">
                <!-- Dynamically added tags here -->
            </div>
        </div>

        <!-- CURRENT MEDICATIONS -->
        <div class="list-section">
            <h4 class="list-header">CURRENT MEDICATIONS</h4>
            <div class="tag-list" id="patientCurrentMeds">
                <!-- Dynamically added tags here -->
            </div>
        </div>
    </div>
</div>


                <!-- Metric Cards -->
<div class="metric-card heart-rate bg-white p-2 rounded-lg flex flex-col justify-between high-status" id="heartRateCard" title="Last updated: 10:30 AM">

    <!-- Header -->
    <div class="flex items-center justify-between mb-1">
        <h4 class="text-xs font-semibold text-gray-500">
            Heart Rate (BPM)
        </h4>
        <i class="fas fa-heart text-lg icon-pulse" style="color: rgb(255, 59, 48);"></i>
    </div>

    <!-- Value -->
    <div class="metric-value-container flex items-baseline justify-start space-x-1">
        <p class="value text-2xl font-extrabold text-gray-800" id="heartRateValue">
            140
        </p>
        <span class="unit text-gray-400 text-xs font-medium">BPM</span>
    </div>

    <!-- Status & Trend -->
    <div class="flex items-center justify-between text-[10px] mt-1">
        <span class="tag rounded-full bg-red-100 text-red-600 px-1 py-[1px]" id="heartRateStatus">High</span>

        <div class="flex items-center space-x-[2px]">
            <i class="fas fa-arrow-up text-red-500 text-[10px]"></i>
            <span class="text-red-500 font-semibold" id="heartRateChange">-2.4%</span>
        </div>
    </div>

    <!-- Sparkline -->
    <div class="w-full h-6 mt-2 relative mini-sparkline" id="heartRateSparkline">
        <canvas class="w-full h-full"></canvas>
    </div>

</div>

<div class="metric-card blood-sugar bg-white p-2 rounded-lg flex flex-col justify-between" 
     id="bloodSugarCard" 
     title="Last updated: 11:00 AM">

    <!-- Header -->
    <div class="flex items-center justify-between mb-1">
        <h4 class="text-xs font-semibold text-gray-500">
            Blood Sugar (mg/dL)
        </h4>
        <i class="fas fa-candy-cane text-lg" style="color: rgb(255,149,0);"></i>
    </div>

    <!-- Value -->
    <div class="metric-value-container flex items-baseline justify-start space-x-1">
        <p class="value text-2xl font-extrabold text-gray-800" id="bloodSugarValue">
            110
        </p>
        <span class="unit text-gray-400 text-xs font-medium">mg/dL</span>
    </div>

    <!-- Status & Trend -->
    <div class="flex items-center justify-between text-[10px] mt-1">
        <span class="tag rounded-full bg-green-100 text-green-600 px-1 py-[1px]" 
              id="bloodSugarStatus">
            Normal
        </span>

        <div class="flex items-center space-x-[2px]">
            <i class="fas fa-arrow-up text-green-500 text-[10px]"></i>
            <span class="text-green-500 font-semibold" id="bloodSugarChange">+3%</span>
        </div>
    </div>

    <!-- Sparkline -->
    <div class="w-full h-6 mt-2 relative mini-sparkline" id="bloodSugarSparkline">
        <canvas class="w-full h-full"></canvas>
    </div>

</div>

<div class="metric-card blood-pressure bg-white p-2 rounded-lg flex flex-col justify-between"
     id="bloodPressureCard"
     title="Last updated: 10:30 AM">

    <!-- Header -->
    <div class="flex items-center justify-between mb-1">
        <h4 class="text-xs font-semibold text-gray-500">
            Blood Pressure
        </h4>
        <i class="fas fa-gauge-high text-lg" style="color: rgb(0, 122, 255);"></i>
    </div>

    <!-- Value -->
    <div class="metric-value-container flex items-baseline justify-start space-x-1">
        <p class="value text-2xl font-extrabold text-gray-800" id="blood-pressure-value">
            145/95
        </p>
        <span class="unit text-gray-400 text-xs font-medium">mmHg</span>
    </div>

    <!-- Status & Trend -->
    <div class="flex items-center justify-between text-[10px] mt-1">
        <span class="tag rounded-full bg-red-100 text-red-600 px-1 py-[1px]">
            High
        </span>

        <div class="flex items-center space-x-[2px]">
            <i class="fas fa-arrow-down text-red-500 text-[10px]"></i>
            <span class="text-red-500 font-semibold">-1%</span>
        </div>
    </div>

    <!-- Sparkline -->
    <div class="w-full h-6 mt-2 relative mini-sparkline">
        <canvas class="w-full h-full" id="bloodPressureSparkline"></canvas>
    </div>

</div>

<div class="metric-card weight bg-white p-2 rounded-lg flex flex-col justify-between"
     id="weightCard"
     title="Last updated: 10:30 AM">

    <!-- Header -->
    <div class="flex items-center justify-between mb-1">
        <h4 class="text-xs font-semibold text-gray-500">
            Weight
        </h4>
        <i class="fas fa-weight-scale text-lg" style="color: rgb(52, 199, 89);"></i>
    </div>

    <!-- Value -->
    <div class="metric-value-container flex items-baseline justify-start space-x-1">
        <p class="value text-2xl font-extrabold text-gray-800" id="weight-value">
            156.0
        </p>
        <span class="unit text-gray-400 text-xs font-medium">lbs</span>
    </div>

    <!-- Status & Trend -->
    <div class="flex items-center justify-between text-[10px] mt-1">
        <span class="tag rounded-full bg-green-100 text-green-600 px-1 py-[1px]">
            Stable
        </span>

        <div class="flex items-center space-x-[2px]">
            <i class="fas fa-arrow-down text-green-500 text-[10px]"></i>
            <span class="text-green-500 font-semibold">4.7</span>
        </div>
    </div>

    <!-- Sparkline -->
    <div class="w-full h-6 mt-2 relative mini-sparkline" id="weight-sparkline">
        <canvas class="w-full h-full"></canvas>
    </div>

</div>



<!-- Timeline Chart -->
<div class="card full-width timeline">
    <div class="card-header">
        <h4>Heart Rate</h4>
        <div class="timeline-controls"></div>
    </div>
    <div class="chart-container">
        <canvas id="heartbeatChart"></canvas>
    </div>
</div>

<!-- Appointments Widget -->
<div class="card appointments-widget">
    <h4>Upcoming Appointments</h4>
    <div id="appointmentsContainer">
        <!-- JS will dynamically populate appointments here -->
    </div>
</div>

<!-- Overall Performance -->
<div class="card overall-performance">
    <div class="card-header">
        <h2>Overall Performance</h2>
        <span class="performance-indicator" id="overallPerformanceValue">↗ 95%</span>
    </div>
    <div class="performance-body">
        <div class="gauge-container">
            <div class="gauge-arc"></div>
            <div class="gauge-center-text">
                <div class="score-number" id="overallScore">468 <span class="perfect-tag">Perfect</span></div>
            </div>
        </div>
        <p id="performanceText">You're healthier than before Maxwel</p>
        <button class="full-report-button">Check Full Report</button>
    </div>
</div>

<!-- Analytics Card -->
<div class="card analytics-card">
    <div class="card-header">
        <h2>Analytics</h2>
        <select class="time-filter" id="analyticsTimeFilter">
            <option value="weekly">Weekly</option>
            <option value="monthly">Monthly</option>
            <option value="yearly">Yearly</option>
        </select>
    </div>

    <div class="analytics-tabs">
        <button class="tab active" data-metric="heartRate">Heart Rate</button>
        <button class="tab" data-metric="bloodPressure">Blood Pressure</button>
        <button class="tab" data-metric="glucose">Glucose</button>
        <button class="tab" data-metric="others">4+</button>
    </div>

    <div class="chart-area" id="analyticsChartArea">
        <div class="y-axis-labels">
            <span>180</span>
            <span>160</span>
            <span>140</span>
            <span>120</span>
            <span>100</span>
        </div>
        
        <div class="bar-chart" id="analyticsBarChart">
            <!-- Bars will be dynamically populated via JS -->
        </div>
    </div>
</div>

                </div>
                
            </section>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const patient = JSON.parse(sessionStorage.getItem('patient'));
document.getElementById('patientName').textContent = `${patient.first_name} ${patient.last_name}`;
document.querySelector('.sub-info').textContent = `${patient.gender}, ${patient.age} • Blood Group: ${patient.blood_group}`;
document.querySelector('.patient-info .primary-condition').textContent = `Primary Condition: ${patient.primary_condition}`;

const ctx = document.getElementById('heartbeatChart').getContext('2d');

const heartbeatChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: Array.from({length: 50}, (_, i) => i), // x-axis points (time)
        datasets: [{
            label: 'BPM',
            data: Array.from({length: 50}, () => Math.floor(Math.random() * 40 + 60)), // random heartbeat data 60-100
            borderColor: '#FF4560',
            backgroundColor: 'rgba(255,69,96,0.1)',
            fill: true,
            tension: 0.4, // smooth curve
            pointRadius: 0 // hide points
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: { display: false },
            tooltip: {
                mode: 'index',
                intersect: false,
            }
        },
        interaction: {
            intersect: false,
            mode: 'nearest',
        },
        scales: {
            x: {
                display: false, // optional: hide x-axis labels
            },
            y: {
                min: 50,
                max: 120,
                ticks: {
                    stepSize: 10,
                }
            }
        }
    }
});

// Optional: Animate the line to look like a live heartbeat
setInterval(() => {
    heartbeatChart.data.datasets[0].data.shift(); // remove first point
    heartbeatChart.data.datasets[0].data.push(Math.floor(Math.random() * 40 + 60)); // add new point
    heartbeatChart.update('none');
}, 1000);


</script>

<script type="module">
document.addEventListener('DOMContentLoaded', initializeFirebase);
import { initializeApp } from "https://www.gstatic.com/firebasejs/11.6.1/firebase-app.js";
import { getAuth, signInAnonymously, signInWithCustomToken } from "https://www.gstatic.com/firebasejs/11.6.1/firebase-auth.js";
import { getFirestore } from "https://www.gstatic.com/firebasejs/11.6.1/firebase-firestore.js";

// --- Firebase/Canvas Setup ---
const appId = typeof __app_id !== 'undefined' ? __app_id : 'default-app-id';
const firebaseConfig = typeof __firebase_config !== 'undefined' ? JSON.parse(__firebase_config) : {};
const initialAuthToken = typeof __initial_auth_token !== 'undefined' ? __initial_auth_token : null;

let app, db, auth;
let userId = null;

// --- Metric Data (IDs must match your HTML) ---
const metricsData = [
    { id: 'heartRateValue', sparklineId: 'heartRateSparkline', value: 72, trend: [68, 70, 75, 71, 72], color: 'rgb(255, 59, 48)', prevValue: 70 },
    { id: 'bloodSugarValue', sparklineId: 'bloodSugarSparkline', value: 185.3, trend: [140, 160, 190, 175, 185.3], color: 'rgb(255, 149, 0)', prevValue: 175.0 },
    { id: 'blood-pressure-value', sparklineId: 'bloodPressureSparkline', value: '120/80', trend: [130, 125, 122, 120, 120], color: 'rgb(0, 122, 255)', prevValue: '122/82' },
    { id: 'weight-value', sparklineId: 'weight-sparkline', value: 155.5, trend: [160.2, 158.9, 157.1, 156.0, 155.5], color: 'rgb(52, 199, 89)', prevValue: 156.0 }
];

// --- Initialize Firebase ---
async function initializeFirebase() {
    try {
        app = initializeApp(firebaseConfig);
        db = getFirestore(app);
        auth = getAuth(app);

        if (initialAuthToken) {
            await signInWithCustomToken(auth, initialAuthToken);
        } else {
            await signInAnonymously(auth);
        }

        userId = auth.currentUser?.uid || 'anonymous';
        const userInfo = document.getElementById('user-info');
        if (userInfo) userInfo.textContent = `User ID: ${userId}`;
        console.log(`Firebase authenticated. User ID: ${userId}`);

        initializeMetrics();
    } catch (e) {
        console.error("Firebase initialization or Auth failed:", e);
        initializeMetrics();
    }
}

// --- Initialize Metrics ---
function initializeMetrics() {
    metricsData.forEach(metric => {
        const valueElement = document.getElementById(metric.id);

        // Animate numeric values
        if (valueElement && typeof metric.value === 'number') {
            animateValueChange(valueElement, metric.prevValue, metric.value, 1500);
        } else if (valueElement) {
            // Display strings (like BP) directly
            valueElement.textContent = metric.value;
        }

        // Draw sparkline
        if (metric.sparklineId) {
            requestAnimationFrame(() => drawSparkline(metric.sparklineId, metric.trend, metric.color));
        }
    });
}

// --- Animate Value ---
function animateValueChange(element, start, end, duration) {
    const startTime = performance.now();
    const difference = end - start;

    function step(timestamp) {
        const elapsed = timestamp - startTime;
        const progress = Math.min(elapsed / duration, 1);
        const eased = 1 - Math.pow(1 - progress, 3);
        const current = start + difference * eased;
        const decimals = Number.isInteger(end) ? 0 : 1;
        element.textContent = current.toFixed(decimals);

        if (progress < 1) requestAnimationFrame(step);
        else element.textContent = end.toFixed(decimals);
    }

    requestAnimationFrame(step);
}

// --- Draw Sparkline ---
function drawSparkline(id, data, color) {
    // Try to find a container div first
    let container = document.getElementById(id);
    let canvas;

    if (container && container.tagName === 'DIV') {
        // ID is on container
        canvas = container.querySelector('canvas');
    } else {
        // ID is directly on canvas
        canvas = document.getElementById(id);
        container = canvas?.parentElement; // fallback for width/height
    }

    if (!canvas || !container) return;

    const ctx = canvas.getContext('2d');
    const ratio = window.devicePixelRatio || 1;
    canvas.width = canvas.offsetWidth * ratio;
    canvas.height = canvas.offsetHeight * ratio;
    ctx.setTransform(1, 0, 0, 1, 0, 0); // reset any previous transforms
    ctx.scale(ratio, ratio);

    const width = canvas.offsetWidth;
    const height = canvas.offsetHeight;
    ctx.clearRect(0, 0, width, height);

    if (!data || data.length < 2) return;

    const min = Math.min(...data);
    const max = Math.max(...data);
    const range = max - min || 1;
    const padding = 2;
    const usableHeight = height - padding * 2;
    const stepX = width / (data.length - 1);
    const getY = v => height - padding - usableHeight * ((v - min) / range);

    // Draw line
    ctx.beginPath();
    ctx.lineWidth = 2.5;
    ctx.lineCap = 'round';
    ctx.lineJoin = 'round';
    ctx.strokeStyle = color;
    ctx.moveTo(0, getY(data[0]));
    for (let i = 1; i < data.length; i++) {
        ctx.lineTo(i * stepX, getY(data[i]));
    }
    ctx.stroke();

    // Gradient fill under line
    const gradient = ctx.createLinearGradient(0, 0, 0, height);
    gradient.addColorStop(0, color.replace('rgb', 'rgba').replace(')', ',0.3)'));
    gradient.addColorStop(1, color.replace('rgb', 'rgba').replace(')', ',0)'));

    ctx.beginPath();
    ctx.moveTo(0, height);
    ctx.lineTo(0, getY(data[0]));
    for (let i = 1; i < data.length; i++) {
        ctx.lineTo(i * stepX, getY(data[i]));
    }
    ctx.lineTo(width, height);
    ctx.closePath();
    ctx.fillStyle = gradient;
    ctx.fill();
}
</script>

<script>
document.addEventListener('DOMContentLoaded', () => {
    fetchDashboardData();
});

// ======================
// FETCH DASHBOARD DATA
// ======================
async function fetchDashboardData() {
    const token = sessionStorage.getItem('api_token');

    if (!token) {
        alert('No session found. Please log in.');
        window.location.href = 'login.php';
        return;
    }

    try {
        const res = await fetch('http://127.0.0.1:8000/api/patient/profile', {
            headers: { 
                'Authorization': `Bearer ${token}` 
            }
        });

        if (!res.ok) throw new Error('Failed to fetch patient data.');

        const data = await res.json();

        if (!data.success || !data.patient) throw new Error('Invalid patient data.');

        const patient = data.patient;

        populateDashboard(patient);

    } catch (err) {
        console.error(err);
        alert('Error fetching dashboard data. Please log in again.');
        window.location.href = 'login.php';
    }
}

// ======================
// POPULATE DASHBOARD
// ======================
function populateDashboard(patient) {
    // HEADER
    document.getElementById('patientName').textContent = `${patient.first_name} ${patient.last_name}`;
    document.getElementById('patientEmail').textContent = patient.email;
    document.getElementById('patientAvatar').src = patient.avatar_url || 'assets/profile.jpg';

    // DATA GRID
    document.getElementById('patientDob').textContent = formatDate(patient.dob);
    document.getElementById('patientGender').textContent = capitalize(patient.gender);
    document.getElementById('patientPrimaryCondition').textContent = patient.medical_profile?.primary_condition || 'N/A';
    document.getElementById('patientDiagnosisDate').textContent = formatDate(patient.medical_profile?.diagnosis_date);

    // TAG LISTS
    populateTagList('patientAllergies', patient.medical_profile?.allergies, 'allergy');
    populateTagList('patientAdditionalConditions', patient.medical_profile?.additional_conditions, 'condition');
    populateTagList('patientCurrentMeds', patient.current_meds, 'medication');

// ======================
// HELPER FUNCTIONS
// ======================

// Format date to MM/DD/YYYY
function formatDate(dateString) {
    if (!dateString) return 'N/A';
    const date = new Date(dateString);
    return date.toLocaleDateString(undefined, { year: 'numeric', month: '2-digit', day: '2-digit' });
}

// Capitalize first letter
function capitalize(str) {
    if (!str) return '';
    return str.charAt(0).toUpperCase() + str.slice(1);
}

// Populate tag lists dynamically
function populateTagList(elementId, data, type) {
    const container = document.getElementById(elementId);
    container.innerHTML = ''; 

    if (!data) return;

    let items = [];

    // If backend sends "Dust, Pollen"
    if (typeof data === 'string') {
        items = data.split(/[,;]+/).map(i => i.trim());
    }

    // If backend sends ["Dust", "Pollen"]
    if (Array.isArray(data)) {
        items = data;
    }

    items.forEach(item => {
        if (!item) return;
        const tag = document.createElement('span');
        tag.className = 'list-tag';
        tag.textContent = item;
        container.appendChild(tag);
    });
}
}

</script>