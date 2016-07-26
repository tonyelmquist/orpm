-- My Report
-- This lists all the products that cost
-- more than a given price.
-- VARIABLE: { name: "min_price", display: "Minimum Price" }

SELECT Name, Price FROM Products WHERE Price > "{{ min_price }}"