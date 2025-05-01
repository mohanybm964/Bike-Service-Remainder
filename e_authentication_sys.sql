CREATE TABLE IF NOT EXISTS bike_service_details (
    id INT AUTO_INCREMENT PRIMARY KEY,
    bike_brand VARCHAR(50) NOT NULL,
    bike_model VARCHAR(50) NOT NULL,
    bike_number VARCHAR(20) NOT NULL,
    current_kilometers INT NOT NULL,
    max_km_per_day INT NOT NULL,
    min_km_per_day INT NOT NULL,
    submission_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
