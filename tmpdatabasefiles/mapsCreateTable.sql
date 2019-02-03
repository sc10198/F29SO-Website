CREATE TABLE [IF NOT EXISTS] MapMarkers(
  marker_id INT AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  lat FLOAT NOT NULL,
  lng FLOAT NOT NULL,
  PRIMARY KEY (marker_id)
)

INSERT INTO MapMarkers("Edinburgh", 55.953, -3.1883);
INSERT INTO MapMarkers("Heriot Watt", 55.9097, -3.3203);
INSERT INTO MapMarkers("Waverly Station", 55.9529, -3.1903);
INSERT INTO MapMarkers("Fountain Park", 55.9411, -3.2156);
