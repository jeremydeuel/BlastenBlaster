-- SETUP BLASTENBLASTER BACKEND DATABASE
-- CREATED BY JEREMY DEUEL <jeremy.deuel@usz.ch>
-- CREATED ON 28. SEPTEMBER 2024
-- CREATE DB BY RUNNING:
-- sqlite3 blaster.db < setup_database.sql

CREATE TABLE users (
    uid INTEGER PRIMARY KEY,
    username TEXT UNIQUE,
    email TEXT UNIQUE,
    password TEXT UNIQUE,
    lastseen TEXT,
    proficiency INTEGER
);

CREATE TABLE cells (
    cid INTEGER PRIMARY KEY,
    path TEXT UNIQUE,
    type VARCHAR(1),
    confidence FLOAT DEFAULT 0
);

CREATE TABLE guesses (
    cid INTEGER,
    uid INTEGER,
    guess_type VARCHAR(1),
    date TEXT,
    FOREIGN KEY (uid) REFERENCES users(uid),
    FOREIGN KEY (cid) REFERENCES cells(cid)
);

CREATE TABLE scores (
    uid INTEGER,
    date INTEGER,
    score INTEGER,
    FOREIGN KEY (uid) REFERENCES users(uid)
);