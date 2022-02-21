import tkinter as tk        # Import GUI Library as tk
from tkinter import *       # Import all GUI Library
import globalVar            # Import Global Variables

def main():                 # declare main

##################################################################
    # when button is clicked
    def Button_Click():                                 # button click method
        numAT = int(at.get())                           # get arrival time value from txt box arrival time
        numBT = int(bt.get())                           # get burst time value from txt box burst time
        numPT = int(pt.get())                            # get priority value from txt box priority
        if globalVar.i < globalVar.numP:                # if Process # is less than number of process
            globalVar.insert(globalVar.i,numAT,numBT,numPT)   #   append Process Number, Arrival Time, Burst Time and Priority
            at.set(0)                                   #   after input set text box arrival time to 0
            bt.set(0)                                   #   after input set text box burst time to 0
            pt.set(0)                                     #   after input set priority to 0
        elif globalVar.i == globalVar.numP:             # else if Process # is equal to number of Process
            globalVar.insert(globalVar.i,numAT,numBT,numPT)   #   append Process Number, Arrival Time, Burst Time and Priority
            window.destroy()                            #   Exit Processes Window GUI
        globalVar.i += 1                                # Iterate Process number every click to move to another process
        window.title("Process "+str(globalVar.i))       # Set GUI title to curren Process number input of AT and BT

    #############################################################
    # MAIN WINDOW
    window = Tk()                                       # declare main window for input of Processes

    window.title("Process "+str(globalVar.i))           # window title
                            # non resizable window

    # IF NUMBER OF PROCESS IS 0 EXIT
    if globalVar.numP==0:
        window.destroy()

    # INITIALIZE VARIABLES
    at = IntVar() # ARRIVAL TIME
    bt = IntVar() # BURST TIME
    pt = IntVar() # PRIORITY

    # LABEL OF TEXT BOXES AT, BT & PRIORITY
    Label(window, text='Enter Arrival Time:',
          font=("Nyala",12)).grid(row=0,sticky=W)
    Label(window, text='Enter Burst Time:',
          font=("Nyala",12)).grid(row=1,sticky=W)
    Label(window, text='Enter Priority:',
          font=("Nyala",12)).grid(row=2,sticky=W)

    # TEXT BOX OF AT, BT & PRIORITY
    txtAT = Entry(window,width=20,textvariable=at) # ARRIVAL TIME
    txtAT.grid(row=0,column=1,padx=5)

    txtBT = Entry(window,width=20,textvariable=bt) # BURST TIME
    txtBT.grid(row=1,column=1,padx=5)

    txtPT = Entry(window,width=20,textvariable=pt) # PRIORITY
    txtPT.grid(row=2,column=1,padx=5)


    # BUTTON to submit arrival time, bt and priority
    btnEnter = Button(window, text='Accept',font=("Nyala",10),
                      command=Button_Click).grid(row=4,columnspan=2,pady=10)

    window.mainloop()

main()
