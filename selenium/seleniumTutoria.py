"source https://www.youtube.com/watch?v=Xjv1sY630Uc&list=PLzMcBGfZo4-n40rB1XaJ0ak1bemvlqumQ"
from selenium import webdriver
from selenium.webdriver.common.by import By
import time

driver = webdriver.Chrome()
driver.get("https://www.seleniumeasy.com/testng-tutorials")
driver.implicitly_wait(30)
my_element = driver.find_element(By.ID,'headingTwo')
print(f"{my_element.text}")
my_element.click()
