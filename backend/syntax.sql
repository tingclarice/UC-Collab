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
    `events_id` INT PRIMARY KEY AUTO_INCREMENT,
    `event_name` VARCHAR(255) NOT NULL,
    `description` TEXT,
    `location` VARCHAR(255),
    `application_deadline` DATE,
    `poster_url` TEXT,
    `organizer_id` INT,
    `category_id` INT,
    FOREIGN KEY (organizer_id) REFERENCES organizers(organizer_id),
    FOREIGN KEY (category_id) REFERENCES categories(category_id),
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);     

-- Table: Application
CREATE TABLE application (
    application_id INT PRIMARY KEY AUTO_INCREMENT,
    events_id INT,
    nama_lengkap VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    nim VARCHAR(20),
    kontak VARCHAR(20),
    jurusan VARCHAR(100),
    angkatan VARCHAR(4),
    pilihan_divisi_1 VARCHAR(100),
    pilihan_divisi_2 VARCHAR(100),
    berkas_url TEXT,
    FOREIGN KEY (events_id) REFERENCES events(events_id)
);


