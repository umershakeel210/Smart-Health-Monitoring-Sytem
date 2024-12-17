<?php
// Sample data for symptoms and medicines
$symptom_dict = [
    "fever" => "Medicine: Panadol (Paracetamol 500mg),
Prescription: Take 1 tablet every 6 hours as needed. Avoid exceeding 8 tablets in 24 hours,
Alternate: Brufen (Ibuprofen 200mg),
Prescription: Take 1 tablet every 6-8 hours with food if fever persists.",
    "cough" => "Medicine: Sancos (Dextromethorphan syrup),
Prescription: Take 2 teaspoons (10ml) every 4-6 hours,
Alternate: Koffex (Herbal cough syrup),
Advice: Drink warm fluids, e.g., ginger tea or honey water.",
    "headache" => "Medicine: Panadol Extra (Paracetamol and Caffeine),
Prescription: Take 1-2 tablets every 6 hours as needed,
Alternate: Disprin (Aspirin 300mg),
Prescription: Dissolve 1 tablet in water and drink.",
    "sore throat" => "Medicine: Strepsils (Lozenges),
Prescription: Dissolve 1 lozenge in the mouth every 2-3 hours,
Alternate: Gargle with warm salt water twice daily.",
    "nausea" => "Medicine: Gravinate (Dimenhydrinate 50mg),
Prescription: Take 1 tablet every 4-6 hours,
Advice: Sip on ginger tea or eat bland meals.",
    "fatigue" => "Medicine: Surbex Z (Multivitamin with Zinc),
Prescription: Take 1 tablet daily after breakfast,
Advice: Ensure adequate rest and hydration.",
    "muscle pain" => "Medicine: Voltral Gel (Diclofenac sodium),
Prescription: Apply to the affected area twice daily,
Alternate: Brufen (Ibuprofen 200mg),
Prescription: Take 1 tablet every 8 hours with food.",
    "shortness of breath" => "Immediate medical attention,
   But Medicine: Ventolin (Salbutamol inhaler),
Prescription: Use 2 puffs as needed. Consult a doctor for further management.",
    "runny nose" => "Medicine: Cetrizine (10mg),
Prescription: Take 1 tablet daily, preferably at bedtime,
Alternate: Use saline nasal spray 2-3 times daily.",
    "chills" => "Medicine: Symptomatic treatment (e.g., Panadol),
Advice: Stay warm and rest.",
    "dizziness" => "Medicine: Bonamine (Meclizine 25mg),
Prescription: Take 1 tablet once daily as needed,
Advice: Stay hydrated and avoid sudden movements.",
    "vomiting" => "Medicine: Vomistop (Domperidone 10mg),
Prescription: Take 1 tablet before meals, up to 3 times daily,
Advice: Stay hydrated with ORS or clear fluids.",
    "diarrhea" => "Medicine: Hydryllin (ORS sachets),
Prescription: Dissolve in water and sip as needed,
Alternate: Lomotil (Diphenoxylate and Atropine),
Prescription: Take 1 tablet after each loose stool. Max 8 tablets/day.",
    "constipation" => "Medicine: Isphaghol (Psyllium husk),
Prescription: Mix 2 tablespoons in warm water and drink before bed,
Alternate: Laxoberon Drops (Sodium picosulfate),
Prescription: 10 drops at bedtime.",
    "abdominal pain" => "Medicine: Zantac (Ranitidine 150mg),
Prescription: Take 1 tablet twice daily before meals,
Alternate: Buscopan (Hyoscine butylbromide 10mg),
Prescription: Take 1 tablet every 6-8 hours.",
    "skin rash" => "Medicine: Dermovate Cream (Clobetasol propionate),
Prescription: Apply a thin layer to the affected area twice daily,
Alternate: Cetrizine (10mg),
Prescription: Take 1 tablet daily.",
    "allergy" => "Medicine: Telfast (Fexofenadine 120mg),
Prescription: Take 1 tablet daily,
Alternate: Loratadine (10mg),
Prescription: Take 1 tablet daily at bedtime.",
    "eye redness" => "Medicine: Tears Naturale (Artificial tears),
Prescription: Instill 1-2 drops in each eye every 6 hours,
Alternate: Use a cold compress.",
    "ear pain" => "Medicine: Otosporin (Ear drops),
Prescription: Instill 2-3 drops into the ear twice daily,
Alternate: Panadol (Paracetamol 500mg),
Prescription: Take 1 tablet every 6 hours.",
    "back pain" => "Medicine: Flexor (Diclofenac Gel),
Prescription: Apply to the affected area 2-3 times daily,
Alternate: Brufen (Ibuprofen 400mg),
Prescription: Take 1 tablet every 8 hours with food.",
"chest pain" =>  "For Chest Pain (Non-Cardiac Causes)
1. Acid Reflux or Heartburn (GERD)
Medicine: Gaviscon (Antacid suspension)
Prescription: Take 2 tablespoons after meals and at bedtime.
Alternate: Omeprazole (20mg) or Esomeprazole (20mg) (e.g., Losec or Nexum)
Prescription: Take 1 capsule in the morning, 30 minutes before breakfast.
2. Muscle Strain or Costochondritis
Medicine: Brufen (Ibuprofen 400mg)
Prescription: Take 1 tablet every 8 hours with food.
Alternate: Voltral Gel (Diclofenac sodium)
Prescription: Apply to the chest area twice daily.
3. Anxiety or Stress-Related Chest Pain
Medicine: Lexotanil (Bromazepam 1.5mg) (Prescription required)
Prescription: Take 1 tablet before bedtime if prescribed by a doctor.
Advice: Practice relaxation techniques like deep breathing or meditation.
For Chest Pain (Cardiac Causes)
Important: Cardiac-related chest pain requires immediate medical attention. If you suspect a heart attack or angina, seek emergency care.
For Angina (Prescribed by a Doctor Only)
Medicine: Nitroglycerin tablets (e.g., Angised)
Prescription: Place 1 tablet under the tongue at the onset of chest pain. Seek emergency care if pain persists.
Alternate: Aspirin (Disprin 300mg)
Prescription: Chew 1 tablet immediately to reduce the risk of a heart attack while awaiting medical help.
",
"joint pain" => "Pain Relief (Over-the-Counter Options)
Tablet Brufen (Ibuprofen 400mg)

Dosage: 1 tablet every 8 hours with food to reduce inflammation and pain.
Tablet Panadol Extra (Paracetamol + Caffeine)

Dosage: 1 tablet every 6-8 hours as needed for mild to moderate pain.
Topical Pain Relief
Voltral Gel (Diclofenac Sodium)

Usage: Apply to the affected joint area 2-3 times daily.
Moov or Deep Heat Cream

Usage: Gently massage on the joint for warmth and relief.
Joint Support
Use joint supplements like Glucosamine or Chondroitin (consult a doctor for appropriate brands and dosage).",
"swelling" => "Tablet Lasix (Furosemide)
Dosage: 20-40 mg once daily (morning) to reduce fluid retention.
Note: Prescription required. Monitor potassium levels.
Supportive Care: Elevate the affected area and reduce salt intake.",
"Blurred vision" => "Artificial Tears (e.g., Tears Naturale, Refresh Plus)
Usage: 1-2 drops in each eye, 3-4 times a day for dryness or irritation.
If caused by diabetes or hypertension:
Tablet Glucophage (Metformin) for diabetes (consult a doctor).
Tablet Norvasc (Amlodipine) for hypertension (prescription required).",
"dry Mouth" => "Saliva Substitutes (e.g., Biotene Gel or Mouthwash)
Usage: Use as directed to keep the mouth moist.
Hydration: Drink plenty of water and chew sugar-free gum to stimulate saliva.
Avoid: Caffeine, alcohol, and tobacco, as they worsen dryness.
Important Note:
blurred vision can indicate a serious underlying condition (e.g., diabetes, high blood pressure). If symptoms persist or worsen, consult a healthcare provider immediately."
];

$suggestions = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $symptoms = $_POST['symptoms'] ?? [];

    foreach ($symptoms as $symptom) {
        $symptom = strtolower(trim($symptom));
        if (array_key_exists($symptom, $symptom_dict)) {
            $suggestions[$symptom] = $symptom_dict[$symptom];
        } else {
            $suggestions[$symptom] = "No specific medicines available for this symptom.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suggested Medicines</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body style="background-color: #f0f8ff;">
    <div class="container mt-5">
        <div class="text-center mb-4">
            <img src="images/favicon.png" alt="Website Logo" style="height: 80px;">
            <h1 class="mt-3 text-primary">Medicine Recommendations</h1>
            <p class="text-secondary">Based on your selected symptoms</p>
        </div>

        <div class="card shadow">
            <div class="card-body">
                <h3 class="card-title text-info">Your Suggestions:</h3>
                <ul class="list-group">
                    <?php foreach ($suggestions as $symptom => $medicine): ?>
                        <li class="list-group-item">
                            <i class="fas fa-notes-medical text-primary"></i>
                            <strong><?= ucfirst($symptom) ?>:</strong> <?= $medicine ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

        <div class="text-center mt-4">
            <a href="symptoms.php" class="btn btn-outline-primary">
                <i class="fas fa-arrow-left"></i> Back to Symptoms Selection
            </a>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center mt-5">
        <p class="text-secondary">&copy; 2024 Your Website Name. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
