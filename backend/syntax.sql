-- Table: Organizers
CREATE TABLE organizers (
    organizer_id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL
); 

-- Table: Categories (enum)
CREATE TABLE categories (
    category_id INT PRIMARY KEY AUTO_INCREMENT,
    category_name VARCHAR(50) NOT NULL
);

-- Table: Events (main)
CREATE TABLE events (
    `event_id` INT PRIMARY KEY AUTO_INCREMENT,
    `event_name` VARCHAR(255) NOT NULL,
    `description` TEXT,
    `location` VARCHAR(255),
    `application_deadline` DATE,
    `poster_url` TEXT,
    `organizer_id` INT DEFAULT NULL,
    `category_id` INT DEFAULT NULL,
    FOREIGN KEY (organizer_id) REFERENCES organizers(organizer_id) ON DELETE SET NULL,
    FOREIGN KEY (category_id) REFERENCES categories(category_id) ON DELETE SET NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);     

-- Table: Application
CREATE TABLE event_applications (
    event_application_id INT PRIMARY KEY AUTO_INCREMENT,
    event_id INT NOT NULL,
    nama_lengkap VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    nim VARCHAR(20),
    kontak VARCHAR(20),
    jurusan VARCHAR(100),
    angkatan YEAR,
    pilihan_divisi_1 VARCHAR(100),
    pilihan_divisi_2 VARCHAR(100),
    berkas_url TEXT,
    FOREIGN KEY (event_id) REFERENCES events(event_id) ON DELETE CASCADE
);


