<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Symptoms Checker</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background-color: #e9f5ff;
            color: #004085;
            font-family: 'Arial', sans-serif;
        }
        .navbar {
            background-color: #004085;
        }
        .navbar-brand {
            color: #fff;
            font-weight: bold;
        }
        .navbar-brand img {
            height: 40px;
            margin-right: 10px;
        }
        .navbar-brand:hover {
            color: #d4edda;
        }
        .card {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card:hover {
            transform: scale(1.02);
            transition: 0.3s;
        }
        .btn-primary {
            background-color: #004085;
            border: none;
        }
        .btn-primary:hover {
            background-color: #002752;
        }
        footer {
            background-color: #004085;
            color: white;
            text-align: center;
            padding: 15px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .symptom-icon {
            font-size: 24px;
            margin-right: 10px;
            color: #004085;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="admin-panel.php">
            <img src="images/favicon.png" alt=""> Smart Health Monitoring 
        </a>
    </nav>

    <div class="container mt-5">
        <h1 class="text-center">Select Your Symptoms</h1>
        <p class="text-center">Hold Ctrl (or Cmd on Mac) to select multiple symptoms.</p>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card p-4">
                    <form action="process_symptoms.php" method="POST">
                        <div class="form-group">
                            <label for="symptoms">Choose your symptoms:</label>
                            <select class="form-control" id="symptoms" name="symptoms[]" multiple>
                                <option value="fever"><i class="fas fa-thermometer-half symptom-icon"></i> Fever</option>
                                <option value="cough"><i class="fas fa-head-side-cough symptom-icon"></i> Cough</option>
                                <option value="headache"><i class="fas fa-brain symptom-icon"></i> Headache</option>
                                <option value="sore throat"><i class="fas fa-throat symptom-icon"></i> Sore Throat</option>
                                <option value="nausea"><i class="fas fa-dizzy symptom-icon"></i> Nausea</option>
                                <option value="fatigue"><i class="fas fa-bed symptom-icon"></i> Fatigue</option>
                                <option value="muscle pain"><i class="fas fa-dumbbell symptom-icon"></i> Muscle Pain</option>
                                <option value="shortness of breath"><i class="fas fa-lungs symptom-icon"></i> Shortness of Breath</option>
                                <option value="runny nose"><i class="fas fa-head-side-mask symptom-icon"></i> Runny Nose</option>
                                <option value="chills"><i class="fas fa-snowflake symptom-icon"></i> Chills</option>
                                <option value="vomiting"><i class="fas fa-toilet symptom-icon"></i> Vomiting</option>
                                <option value="diarrhea"><i class="fas fa-restroom symptom-icon"></i> Diarrhea</option>
                                <option value="rash"><i class="fas fa-allergies symptom-icon"></i> Rash</option>
                                <option value="dizziness"><i class="fas fa-clipboard symptom-icon"></i> Dizziness</option>
                                <option value="chest pain"><i class="fas fa-heartbeat symptom-icon"></i> Chest Pain</option>
                                <option value="joint pain"><i class="fas fa-walking symptom-icon"></i> Joint Pain</option>
                                <option value="swelling"><i class="fas fa-fill-drip symptom-icon"></i> Swelling</option>
                                <option value="blurred vision"><i class="fas fa-eye symptom-icon"></i> Blurred Vision</option>
                                <option value="dry mouth"><i class="fas fa-glass-whiskey symptom-icon"></i> Dry Mouth</option>
                                <option value="abdominal pain"><i class="fas fa-stomach symptom-icon"></i> Abdominal Pain</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Diagnose</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Smart Health Monitoring. All Rights Reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
