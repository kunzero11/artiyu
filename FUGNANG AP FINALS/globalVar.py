import tkinter as tk        # import gui as tk
from tkinter import *       # import all gui libraries
from tkinter.ttk import *           # importing GUI Styles

def process():          # method to declare global processes variable
    global proc
    proc = []

# method to append global processes variable's arrival time, burst time and priority
def insert(process_number,arrival_time,burst_time,priority):
    proc.append([process_number,arrival_time,burst_time,priority])

def numProcess():       # method to declare global number of process variable
    global numP
    numP = 0

def iterator():         # method to declare global iterator variable
    global i
    i = 1

def mainW():            # method to declare global main window 
    global mWindow
    mWindow = tk.Tk()

def gantW():            # method to declare global gant window 
    global gWindow
    gWindow = tk.Tk()
