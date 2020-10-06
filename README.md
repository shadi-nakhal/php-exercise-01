# php-exercise-01

- Fork the php-exercise-01 to your account.

- Do all exercises and push them.

## Part 1: Registration <kbd>25x🔑</kbd>

We will be creating registration and login process for a website.

1. Create 2 pages:<br/>
  a. Registration and Login Page. (home.php)<br/>
  b. Logged in Page (safe.php)<br/>

2. The first page should be split in half. The left side is where a user registers, whereas the right side is where the user logs in. Go crazy with the design as the really good ones will get bonus keys

3. Registration fields:</br>
  a. Full Name</br>
  b. Username</br>
  c. Password</br>
  d. Confirm Password<br/>
  e. Email</br>
  f. Phone</br>
  g. Date of Birth</br>
  h. Social Security Number</br>

4. Login Fields:<br/>
  a. Username<br/>
  b. Password<br/>

5. On submit all data must be displayed in a nice ordered way. All input must be validated (For full keys use backend validation). This might include a validation of whether the user exists.

## Part 2: Income Tax Calculator <kbd>35x🔑</kbd>

In this exercise we will be creating an income tax calculator. Your task will be to provide an interface for an employee to calculate their salary post income tax.

To do so you must have the following:

1. A form containing the following fields:</br>
  a. Salary in USD </br>
  b. Radio button with 2 options: Yearly or monthly. </br>
  c. Tax Free Allowance in USD </br>

2. The results should be shown in a tabular format and should include: </br>
  a. Two columns: monthly and yearly </br>
  b. The following rows:
    - Total salary
    - Tax amount
    - Social security fee
    - Salary after tax </br>

Rules:<br>
  1. All the fields are required. </br>
  2. When you choose monthly or yearly the calculation must adjust accordingly </br>
  3. There are some salary ranges that will affect the percentage of the tax. Below is the list of yearly salaries and their taxes:
      - salary < 10,000$: 0% tax
      - 10,000$ < salary < 25,000$: 11% Tax
      - 25,000$ < salary < 50,000$: 30% tax
      - salary > 50,000$: 45% tax </br></br>

  4. Tax free allowance must be added to salary after tax.
  5. A social security fee worth 4% of the salary is deducted from salary for anyone with salary > 10,000$.</br>
  6. The site must be extremely user friendly and looks good. You will receive extra keys for your creativity.</br>
  7. Bonus <kbd>5x🔑</kbd> if you stay in the same page on submit and maintain the inputs in their respective input fields.

## Part 3: Palindrome <kbd>5x🔑</kbd>
Write a function that takes a string as a parameter and returns true if the string is a palindrome and false otherwise. A string is considered a palindrome if it has the same sequence of letters when reversed (for example, "radar", "mom", "a", "").
- Function input should be from the query string.
- Your function should be case insensitive.

## Part 4: Multidimensional Arrays <kbd>10x🔑</kbd>
You have the following array:
```
Array ( [musicals] => Array ( [0] => Oklahoma [1] => The Music Man [2] => South Pacific ) [dramas] => Array ( [0] => Lawrence of Arabia [1] => To Kill a Mockingbird [2] => Casablanca ) [mysteries] => Array ( [0] => The Maltese Falcon [1] => Rear Window [2] => North by Northwest ) )
```
Create the multidimensional array from it and then print it out as follows (exact same):

```
MUSICALS
----> 0 = Oklahoma
----> 1 = The Music Man
----> 2 = South Pacific
DRAMAS
----> 0 = Lawrence of Arabia
----> 1 = To Kill a Mockingbird
----> 2 = Casablanca
MYSTERIES
----> 0 = The Maltese Falcon
----> 1 = Rear Window
----> 2 = North by Northwest
```

Once you are done, sort the array in decreasing order by genre.
