Feature: Search for a word that exists on page
  In order to find information about that page
  As a website user
  I need to be able to search for phrase "Registeeru"


  Scenario: Search for a word that exists
    Given I am on "/"
    When I press "login"
    Then I should see "Logi sisse"