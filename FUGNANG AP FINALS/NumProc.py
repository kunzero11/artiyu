import tkinter as tk            # Import GUI Library as tk
from tkinter import *           # Import all GUI Library
import globalVar                # Import all GUI Library


def main():
    
##################################################

    def Button_Click():                     # button click method
        globalVar.numP = int(num.get())     # get number of process from textbox
        window.destroy()                    # exit GUI

##################################################

    # MAIN WINDOW
    window = Tk()                           # declare main window for input of Processes

    window.title("Number of Process")       # window title
    window.resizable(0,0)                   # non resizable window

    #LABEL
    Label(window, text='Enter number of process:',
          font=("Nyala",14)).grid(row=0,sticky=W+E,
                                           pady=5,padx=5)

    num = IntVar() # INITIALIZE VARIABLE FOR NUMBER OF PROCESS

    # TEXT BOX
    txtNumProcess = Entry(window,width=20,textvariable=num)
    txtNumProcess.grid(row=1,pady=5)
    num.set(1)
    txtNumProcess.focus()

    # BUTTTON
    btnEnter = Button(window, text='Accept',font=("Nyala",11),
                      command=Button_Click).grid(row=2,pady=10)                  

    window.mainloop()
main()
