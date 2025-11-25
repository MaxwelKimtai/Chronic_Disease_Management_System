<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient's Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div id="dashboard">
        
        <aside class="sidebar">
            <div class="sidebar-logo">
                <i class="fas fa-plus-circle"></i> </div> <div class="sidebar-search">
 
                <i class="fas fa-search"></i>
                <input type="text" placeholder="search">
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
                    <p class="date">It's Monday, November 25, 2025</p>
                </div>
                <a href="Add_logs.php" class="add-quick-logs-button">
                    <i class="fas fa-plus"></i> Add Quick Logs
                </a>
            </header>

            <section class="dashboard-grid">
                
                <div class="patient-overview-panel">
    <div class="patient-card">
        <div class="patient-header">
            <img src="assets/profile.jpg" alt="Patient Photo" class="patient-avatar">

            <div class="patient-info">
                <div class="patient-name-row">
                    <h3 class="patient-name">Maxwel Kimtai</h3>
                    <i class="fas fa-edit patient-edit" title="Edit Profile"></i>
                </div>

                <p class="sub-info">Male, 20 • Blood Group: <strong>A+</strong></p>
                <p class="sub-info">Primary Condition: <strong>Hypertension</strong></p>

                <span class="status-badge">Post-Surgery</span>

                <p class="update-time">Last Vitals Update: <strong>2 mins ago</strong></p>
            </div>
        </div>

        <div class="patient-extra">
            <p><span class="label">Primary Physician:</span> Dr. Alex Nguyen</p>
            <p><span class="label">Emergency Contact:</span> (555) 123-4567</p>
        </div>
    </div>
</div>



                <div class="card metric-card" title="Last updated: 10:30 AM">
                    <h4>Heart Rate <i class="fas fa-heart"></i></h4>
                    <div class="metric-value-container">
                        <p class="value">140 <span class="unit">bpm</span></p>
                        <span class="change negative">-2.4%</span>
                    </div>
                    <div class="status-range">Status: <span class="tag high">High</span> (Normal: 60-100)</div>
                    <div class="mini-sparkline">[Sparkline Here]</div>
                </div>
                
                <div class="card metric-card" title="Last updated: 11:00 AM">
                    <h4>Blood Sugar <i class="fas fa-candy-cane"></i></h4>
                    <div class="metric-value-container">
                        <p class="value">110<span class="unit">mg/dL</span></p>
                        <span class="change positive">+3%</span>
                    </div>
                    <div class="status-range">Status: <span class="tag normal">Normal</span> (Normal: 97.6-99.6)</div>
                    <div class="mini-sparkline">[Sparkline Here]</div>
                </div>
                

                <div class="card metric-card" title="Last updated: Yesterday">
                    <h4>Blood Pressure <i class="fas fa-weight-hanging"></i></h4>
                    <div class="metric-value-container">
                        <p class="value">165 <span class="unit">lbs</span></p>
                        <span class="change negative">-5%</span>
                    </div>
                    <div class="status-range">Status: <span class="tag normal">Normal</span> (Target: 160-180)</div>
                    <div class="mini-sparkline">[Sparkline Here]</div>
                </div>
                
                <div class="card metric-card bp-card" title="Last updated: 10:30 AM">
                    <h4>Blood Pressure <i class="fas fa-tint"></i></h4>
                    <div class="metric-value-container">
                        <p class="value">145/95 <span class="unit">mmHg</span></p>
                        <span class="change negative">-1%</span>
                    </div>
                    <div class="status-range">Status: <span class="tag high">High</span> (Normal: <120/80)</div>
                    <div class="mini-sparkline">[Sparkline Here]</div>
                </div>
                
                <div class="card metric-card sugar-card" title="Last updated: 9:00 AM">
                    <h4>Blood Sugar <i class="fas fa-candy-cane"></i></h4>
                    <div class="metric-value-container">
                        <p class="value">110 <span class="unit">mg/dL</span></p>
                        <span class="change positive">+5%</span>
                    </div>
                    <div class="status-range">Status: <span class="tag low">Normal</span> (Fasting: 70-100)</div>
                    <div class="mini-sparkline">[Sparkline Here]</div>
                </div>
                
                
                <div class="card full-width timeline">
    <div class="card-header">
        <h4>Heart Rate</h4>
        <div class="timeline-controls">
            <!-- Optional: future dropdown or filters -->
        </div>
    </div>
    <div class="chart-container">
        <canvas id="heartbeatChart"></canvas>
    </div>
</div>

                
                <div class="card appointments-widget">
                    <h4>Upcoming Appointments</h4>
                    <div class="appointment-item">
                        <div class="details">
                            <p class="appointment-status confirmed">Confirmed</p>
                            <p>Mode: Physical Meeting</p>
                            <p>Doctor: Dr. Alex Kamau</p>
                            <p>Time: Today, 4:00 PM</p>
                        </div>
                        <div class="appointment-actions">
                            <button class="cta-button secondary">Reschedule</button>
                            <button class="cta-button danger">Cancel</button>
                        </div>
                    </div>
                    <div class="appointment-item">
                        <div class="details">
                            <p class="appointment-status pending">Pending</p>
                            <p>Mode: In-person</p>
                            <p>Doctor: Dr. Alicia Chebet</p>
                            <p>Time: Jul 25, 2026, 10:30 AM</p>
                        </div>
                        <div class="appointment-actions">
                            <button class="cta-button secondary">View Details</button>
                            <button class="cta-button danger">Cancel</button>
                        </div>
                    </div>
                </div>
                
                <div class="card overall-performance">
                <div class="card-header">
                    <h2>Overall Performance</h2>
                    <span class="performance-indicator">
                        <span class="arrow">↗</span> 95%
                    </span>
                </div>
                
                <div class="performance-body">
                    <div class="gauge-container">
                        <div class="gauge-arc"></div>
                        <div class="gauge-center-text">
                            <div class="score-number">468 <span class="perfect-tag">Perfect</span></div>
                        </div>
                    </div>
                    <p>
                   You're healthier than before Maxwel
                    </p>
                    <button class="full-report-button">Check Full Report</button>
                </div>
            </div>

            <div class="card analytics-card">
                <div class="card-header">
                    <h2>Analytics</h2>
                    <select class="time-filter">
                        <option>Weekly</option>
                        <option>Monthly</option>
                        <option>Yearly</option>
                    </select>
                </div>

                <div class="analytics-tabs">
                    <button class="tab active">Heart Rate</button>
                    <button class="tab">Blood Pressure</button>
                    <button class="tab">Glucose</button>
                    <button class="tab">4+</button>
                </div>

                <div class="chart-area">
                    <div class="y-axis-labels">
                        <span>180</span>
                        <span>160</span>
                        <span>140</span>
                        <span>120</span>
                        <span>100</span>
                    </div>
                    
                    <div class="bar-chart">
                        <div class="bar-group">
                            <div class="bar" style="height: 50%;"></div>
                            <span class="label">Sat</span>
                        </div>
                        <div class="bar-group">
                            <div class="bar" style="height: 65%;"></div>
                            <span class="label">Sun</span>
                        </div>
                        <div class="bar-group">
                            <div class="bar" style="height: 35%;"></div>
                            <span class="label">Mon</span>
                        </div>
                        <div class="bar-group">
                            <div class="bar" style="height: 50%;"></div>
                            <span class="label">Tue</span>
                        </div>
                        <div class="bar-group selected">
                            <div class="bar" style="height: 85%;"></div>
                            <span class="value-tip">167 bpm</span>
                            <span class="label">Wed</span>
                        </div>
                        <div class="bar-group">
                            <div class="bar" style="height: 45%;"></div>
                            <span class="label">Thu</span>
                        </div>
                        <div class="bar-group">
                            <div class="bar" style="height: 30%;"></div>
                            <span class="label">Fri</span>
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
